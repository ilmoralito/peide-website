<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Event;
use App\Schedule;
use App\EventFaq;
use App\Http\Requests\EventRequest;
use App\Http\Requests\EventFaqRequest;
use App\Http\Requests\ScheduleRequest;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['display']
        ]);
    }

    public function index()
    {
        $events = auth()->user()->events()->orderBy('created_at', 'desc')->get();

        return view('event.index', compact('events'));
    }

    public function create()
    {
        return view('event.create');
    }

    public function store(EventRequest $eventRequest)
    {
        $event = new Event;

        $event->name = request('name');
        $event->price = request('price');
        $event->address = request('address');
        $event->latitude = request('latitude');
        $event->longitude = request('longitude');
        $event->slug = str_slug(request('name'));
        $event->description = request('description');
        // set some dummy text when stored it will be changed for real image url
        $event->image = 'temp';

        auth()->user()->events()->save($event);

        // add image to stored event
        $image = request()->file('image')->store('events/' . $event->id);
        $event->image = Storage::disk('s3')->url($image);

        $event->save();

        session()->flash('message', 'Evento guardado sin publicar');
        return back();
    }

    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
    }

    public function update(EventRequest $eventRequest)
    {
        $event = Event::findOrFail(request('id'));
        $directory = 'events/' . $event->id;
        Storage::disk('s3')->deleteDirectory($directory);
        $image = request()->file('image')->store($directory);

        $event->name = request('name');
        $event->price = request('price');
        $event->address = request('address');
        $event->latitude = request('latitude');
        $event->longitude = request('longitude');
        $event->description = request('description');
        $event->image = Storage::disk('s3')->url($image);
        $event->is_published = request()->has('is_published');

        $event->save();

        session()->flash('message', 'Evento actualizado');
        return back();
    }

    public function destroy()
    {
        Event::findOrFail(request('id'))->delete();

        session()->flash('message', 'Evento eliminado');
        return redirect()->route('events');
    }

    public function faqs(Event $event)
    {
        $faqs = $event->faqs;

        return view('event.faqs', compact('event', 'faqs'));
    }

    public function createFaq(Event $event)
    {
        return view('event.createfaq', compact('event'));
    }

    public function storeFaq(Event $event, EventFaqRequest $eventFaqRequest)
    {
        $eventFaq = new EventFaq;

        $eventFaq->question = request('question');
        $eventFaq->answer = request('answer');

        $event->faqs()->save($eventFaq);

        session()->flash('message', 'Pregunta comun guardada');
        return back();
    }

    public function showFaq(Event $event, EventFaq $faq)
    {
        return view('event.showfaq', compact('event', 'faq'));
    }

    public function editFaq(Event $event, EventFaq $faq)
    {
        return view('event.editfaq', compact('event', 'faq'));
    }

    public function updateFaq(Event $event, EventFaqRequest $eventFaqRequest)
    {
        $eventFaq = EventFaq::findOrFail(request('id'));

        $eventFaq->question = request('question');
        $eventFaq->answer = request('answer');

        $eventFaq->save();

        session()->flash('message', 'Pregunta frequente actualizada');
        return back();
    }

    public function destroyFaq(Event $event)
    {
        EventFaq::findOrFail(request('id'))->delete();

        session()->flash('message', 'Eliminada pregunta comun');
        return redirect()->route('eventFaqs', [
            'event' => $event
        ]);
    }

    public function schedules(Event $event)
    {
        $schedules = $event->schedules()->orderBy('created_at', 'desc')->get();

        return view('event.schedules', compact('event', 'schedules'));
    }

    public function createSchedule(Event $event)
    {
        return view('event.createschedule', compact('event'));
    }

    public function storeSchedule(Event $event, ScheduleRequest $scheduleRequest)
    {
        $dates = explode(' - ', request('interval'));

        $schedule = new Schedule;

        $schedule->location = request('location');
        $schedule->start_date = Carbon::parse($dates[0]);
        $schedule->closing_date = Carbon::parse($dates[1]);

        $event->schedules()->save($schedule);

        session()->flash('message', 'Horario guardado');

        return back();
    }

    public function display($slug)
    {
        $event = Event::where('slug', $slug)->first();

        return view('event.display', compact('event'));
    }
}
