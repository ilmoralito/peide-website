@extends('layouts.master')

@section('content')
    <div class="columns">
        <div class="column is-two-thirds">
            <div class="columns">
                <div class="column">
                    <p>Mision</p>
    
                    <p>
                        Promover en los discentes y en la sociedad civil una actitud emprendedora
                        desarrollando valores humanísticos, liderazgo y competencias necesarias para que sean agentes de cambio
                        capaces de transformar su entorno económico y social
                    </p>
                </div>
                <div class="column">
                    <p>Vision</p>
    
                    <p>
                        Ser reconocidos a nivel nacional como un programa de formación integral
                        que le permita a los estudiantes emprendedores fortalecer sus competencias de liderazgo,
                        y revolucionar los procesos de desarrollo e innovación empresarial
                    </p>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>Alianzas</p>
    
                    <ul>
                        <li>
                            <a href="#">Red emprende nicaragua</a>
                        </li>
                        <li>
                            <a href="#" alt="Camara de comercio y servicios de Nicaragua">Camara de comercio y servicios de Nicaragua</a>
                        </li>
                        <li>
                            <a href="http://conicyt.gob.ni/" alt="Consejo Nicaragüense de Ciencia y Tecnología">Consejo Nicaragüense de Ciencia y Tecnología</a>
                        </li>
                        <li>
                            <a href="https://www.peacecorps.gov/" alt="Peace corps">Peace corps</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>Programas</p>
    
                    <ul>
                        <li><a href="#">lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <h5 class="title is-5">Contactanos</h5>
    
                <div class="content">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="1" class="has-text-centered">
                                    <span class="icon">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </span>
                                </td>
                                <td>Leon, Nicaragua. UCC Leon</td>
                            </tr>
    
                            <tr>
                                <td width="1" class="has-text-centered">
                                    <span class="icon">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </span>
                                </td>
                                <td>John Doe</td>
                            </tr>
    
                            <tr>
                                <td width="1" class="has-text-centered">
                                    <span class="icon">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </span>
                                </td>
                                <td>john.doe@domain.edu.ni</td>
                            </tr>
    
                            <tr>
                                <td width="1" class="has-text-centered">
                                    <span class="icon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </span>
                                </td>
                                <td>(505) <a href="tel:88888878">8888 8878</a>, <a href="tel:77777878">7777 7878</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
                <div class="content">
                    <form method="POST" action="about" autocomplete="off">
                        {{ csrf_field() }}
    
                        <div class="field">
                            <label for="name">Nombre</label>
                            <p class="control">
                                <input type="text" name="name" id="name" class="input">
                            </p>
                        </div>
    
                        <div class="field">
                            <label for="name">Email</label>
                            <p class="control">
                                <input type="email" name="email" id="email" class="input">
                            </p>
                        </div>
    
                        <div class="field">
                            <label for="message">Mensaje</label>
                            <p class="control">
                                <textarea name="message" id="message" class="textarea"></textarea>
                            </p>
                        </div>
    
                        <button type="submit" class="button is-primary">Enviar</button>
    
                        <p class="field">
                            @include('partials.errors')
                        </p>
                    </form>
    
                    @include('partials.message')
                </div>
            </div>
        </div>
    </div>
@endsection
