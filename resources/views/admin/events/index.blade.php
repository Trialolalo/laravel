@extends('admin.layout.crud')

@section('table')        
    <div class="table-register">
        <div class="table-top">
            <div class="table-edit">
                <div class="pencil">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>pencil</title><path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" /></svg>
                </div>
                <div class="trash">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>delete</title><path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg>
                </div>
            </div>
        </div>
        <div class="table-info">
            <ul>
                <li>Nombre:</li>
                <li>Precio:</li>
                <li>Hora:</li>
            </ul>
        </div>
    </div>

    <div class="table-register">
        <div class="table-top">
            <div class="table-edit">
                <div class="pencil">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>pencil</title><path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" /></svg>
                </div>
                <div class="trash">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>delete</title><path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg>
                </div>
            </div>
        </div>
        <div class="table-info">
            <ul>
                <li>Nombre:</li>
                <li>Precio:</li>
                <li>Hora:</li>
            </ul>
        </div>
    </div>
    <div class="table-register">
        <div class="table-top">
            <div class="table-edit">
                <div class="pencil">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" /></svg>
                </div>
                <div class="trash">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg>
                </div>
            </div>
        </div>
        <div class="table-info">
            <ul>
                <li>Nombre:</li>
                <li>Precio:</li>
                <li>Hora:</li>
            </ul>
        </div>
    </div>
    <div class="table-register">
        <div class="table-top">
            <div class="table-edit">
                <div class="pencil">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>pencil</title><path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" /></svg>
                </div>
                <div class="trash">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>delete</title><path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg>
                </div>
            </div>
        </div>
        <div class="table-info">
            <ul>
                <li>Nombre:</li>
                <li>Precio:</li>
                <li>Hora:</li>
            </ul>
        </div>
    </div>
@endsection

@section('form')
    <div class="form-buttons">
        <button class="form-save">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17 3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V7L17 3M19 19H5V5H16.17L19 7.83V19M12 12C10.34 12 9 13.34 9 15S10.34 18 12 18 15 16.66 15 15 13.66 12 12 12M6 6H15V10H6V6Z" /></svg>
        </button>
    </div>
    <form action=""> 
        <div class="form">
            <div class="form-element">
                <div class="form-element-label">
                    <label>
                        Título
                    </label>
                </div>
                <div class="form-element-input">
                    <input name="submitted-name" autocomplete="name" type="text" />
                </div>
            </div>
            <div class="form-element">
                <div class="form-element-label">
                    <label>
                        Descripción
                    </label>
                </div>
                <div class="form-element-input">
                    <textarea id="description" name="description" rows="5" cols="33">
                        
                    </textarea>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-element">
                <div class="form-element-label">
                    <label>
                        Dirección
                    </label>
                </div>
                <div class="form-element-input">
                    <input name="submitted-name" autocomplete="name" type="text" />
                </div>
            </div>
            <div class="form-element">
                <div class="form-element-label">
                    <label>
                        Fecha
                    </label>
                </div>
                <div class="form-element-input">
                    <input name="submitted-name" autocomplete="name" type="date" />
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-element">
                <div class="form-element-label">
                    <label>
                        Hora
                    </label>
                </div>
                <div class="form-element-input">
                    <input name="submitted-name" autocomplete="name" type="time" />
                </div>
            </div>
            <div class="form-element">
                <div class="form-element-label">
                    <label>
                        Precio
                    </label>
                </div>
                <div class="form-element-input">
                    <input name="submitted-name" autocomplete="name" type="number" />
                </div>
            </div>
        </div>
    </form>
@endsection

       