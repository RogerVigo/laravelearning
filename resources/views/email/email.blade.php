@component('mail::message')

    # A heading

    Lorem ipsum

    - A list

    @component('mail::button',['url'=>'https://www.google.com'])
        Usa Google
    @endcomponent
@endcomponent