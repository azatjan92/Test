<!-- resources/views/emails/user_data.blade.php -->

@component('mail::message')
    # Данные пользователя

    Дата: {{ $userData->date }}
    Адрес: {{ $userData->address }}
    Электроэнергия: {{ $userData->electricity }}
    Водоснабжение: {{ $userData->water }}
    Газ: {{ $userData->gas }}
    Сумма: {{ $userData->amount }}
    Срок оплаты: {{ $userData->due_date }}

    Спасибо,
    {{ config('app.name') }}
@endcomponent
