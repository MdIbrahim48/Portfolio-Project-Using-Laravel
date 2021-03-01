@component('mail::message')
    <h2>New Email Form {{$contact_form_data['email']}}</h2>
    <p>Name {{$contact_form_data['name']}}</p>
    <p>Phone {{$contact_form_data['phone']}}</p>
    <p>Message {{$contact_form_data['message']}}</p>
@endcomponent
