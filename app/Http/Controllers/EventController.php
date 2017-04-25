<?php

namespace App\Http\Controllers;

use App\Event;
use App\Schedule;
use App\EventFaq;
use App\Http\Requests\EventRequest;
use App\Http\Requests\EventFaqRequest;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
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
}
