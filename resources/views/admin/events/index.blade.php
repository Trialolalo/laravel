@extends('admin.layout.crud')

@section('table')       
    @component('admin.components.table-filter')
        <form class="filter-form">
            <h3>
                Filtraje de tabla
            </h3>
            <div class="form-element">
                <div class="form-element-label">
                    <label>
                        Nombre
                    </label>
                </div>
                <div class="form-element-input">
                    <input name="submitted-name" autocomplete="name" />
                </div>
            </div>
            <div class="form-element">
                <div class="form-element-label">
                    <label>
                        Email
                    </label>
                </div>
                <div class="form-element-input">
                    <input name="submitted-name" autocomplete="name" />
                </div>
            </div>
        </form>
    @endcomponent 

    <div class="table-registers">
        @isset($events)
            @foreach($events as $event_element)
                <div class="table-register">
                    <div class="table-top">
                        <div class="table-edit">
                            <div class="pencil">
                                <button class="edit-button" data-endpoint="{{route('events_edit', ["event" =>  $event_element->id])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="trash">
                                <button class="trash-slide destroy-button" data-endpoint="{{route('events_destroy', ["event" =>  $event_element->id])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="table-info">
                        <ul>
                            <li>Evento: {{ $event_element->name }}</li>
                            <li>Dirección: {{ $event_element->address }}</li>
                            <li>Precio: {{ $event_element->price }}</li>
                            <li>Día de inicio: {{ $event_element->start_date }}</li>
                            <li>Día de finalización: {{ $event_element->end_date }}</li>
                            <li>Hora de inicio: {{ $event_element->start_time }}</li>
                            <li>Hora de finalización: {{ $event_element->end_time }}</li>
                            <li>Creado el: {{ $event_element->created_at }}</li>
                            <li>Actualizado el: {{ $event_element->updated_at }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
    
    <div class="table-pagination">
        <span>{{trans_choice('admin/pagination.total',  1, ['count' => 1])}}</span>
    </div>
@endsection

@section('form')
    <div class="tabs">
        <div class="tab-selector">
            <div class="tab active" data-tab="main">
                <button>
                    Principal
                </button>
            </div>
            <div class="tab" data-tab="images">            
                <button>
                    Imágenes
                </button>
            </div> 
        </div>
        <div class="form-buttons">
            <div class="form-clean-button create-button"  data-endpoint="{{route('events_create')}}">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>broom</title><path d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" /></svg>
                </button>
            </div>
            <div class="form-save-button store-button"  data-endpoint="{{route('events_store')}}">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>content-save</title><path d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" /></svg>
                </button>
            </div>
        </div>
    </div>

    <form class="admin-form"> 
        <input name="id"  type="hidden" value="{{$event->id ?? ''}}">

        <div class="tab-content active" data-tab="main">
            <div class="form-row">
                <div class="form-element">
                    <div class="form-element-label">
                        <label>
                            Nombre
                        </label>
                    </div>
                    <div class="form-element-input">
                        <input class="validate" name="name" autocomplete="name" data-onlyletters="true" value="{{$event->name ?? ''}}" />
                    </div>
                </div>
                <div class="form-element">
                    <div class="form-element-label">
                        <label>
                            Población
                        </label>
                    </div>
                    <div class="form-element-input">
                        <select id="town_id" name="town_id">
                            <option value=""></option>
                            @foreach($towns as $town)
                                <option value="{{$town->id}}" {{$town->id == $event->town_id ? 'selected' : ''}}>{{$town->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-element">
                    <div class="form-element-label">
                        <label>
                            Start Date
                        </label>
                    </div>
                    <div class="form-element-input">
                        <input class="validate" type="date" name="start_date" autocomplete="name" data-onlyletters="true" value="{{$event->start_date ?? ''}}" />
                    </div>
                </div>
                <div class="form-element">
                    <div class="form-element-label">
                        <label>
                            End Date
                        </label>
                    </div>
                    <div class="form-element-input">
                        <input class="validate" type="date" name="end_date" value="{{$event->end_date ?? ''}}" autocomplete="name" />
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-element">
                    <div class="form-element-label">
                        <label>
                            Start Time
                        </label>
                    </div>
                    <div class="form-element-input">
                        <input class="validate" type="time" name="start_time" data-onlyletters="true" value="{{$event->start_time ?? ''}}"/>
                    </div>
                </div>
                <div class="form-element">
                    <div class="form-element-label">
                        <label>
                            End Time
                        </label>
                    </div>
                    <div class="form-element-input">
                        <input class="validate" type="time" data-mail="true" name="end_time" value="{{$event->end_time ?? ''}}"/>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-element">
                    <div class="form-element-label">
                        <label>
                            Address
                        </label>
                    </div>
                    <div class="form-element-input">
                        <input class="validate" data-minlength="8" type="text" name="address" autocomplete="name" value="{{$event->address ?? ''}}" />
                    </div>
                </div>
                <div class="form-element">
                    <div class="form-element-label">
                        <label>
                            Price
                        </label>
                    </div>
                    <div class="form-element-input">
                        <input name="price" type="num" autocomplete="name" value="{{$event->price ?? '0'}}"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" data-tab="images">
            <div class="form-row">
                <div class="form-element">
                    <div class="form-element-label">
                        <label>
                            Avatar
                        </label>
                    </div>
                    <div class="form-element-input">
                        <input type="file" />
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

       