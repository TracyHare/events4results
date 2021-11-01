@component('mail::message')
# 2022 Business Planning Event

Dear {{ $registrant->first_name }},

We have received your registration for the 2022 Business Planning Event on November 30th, 2021.

We look forward to seeing you there!

@component('mail::button', ['url' => 'https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20211130T150000Z%2F20211130T223000Z&location=12777%20Olive%20Blvd%5C%2C%20St.%20Louis%2C%20MO%2063141&text=2022%20Business%20Planning', 'color' => 'primary'])
    Add to Google Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.live.com/calendar/0/deeplink/compose?enddt=2021-11-30T22%3A30%3A00%2B00%3A00&location=12777%20Olive%20Blvd%5C%2C%20St.%20Louis%2C%20MO%2063141&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2021-11-30T15%3A00%3A00%2B00%3A00&subject=2022%20Business%20Planning', 'color' => 'primary'])
    Add to Outlook Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.office.com/calendar/0/deeplink/compose?enddt=2021-11-30T22%3A30%3A00%2B00%3A00&location=12777%20Olive%20Blvd%5C%2C%20St.%20Louis%2C%20MO%2063141&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2021-11-30T15%3A00%3A00%2B00%3A00&subject=2022%20Business%20Planning', 'color' => 'primary'])
    Add to Office365 Calendar
@endcomponent
@component('mail::button', ['url' => 'https://calendar.yahoo.com/?et=20211130T223000Z&in_loc=12777%20Olive%20Blvd%5C%2C%20St.%20Louis%2C%20MO%2063141&st=20211130T150000Z&title=2022%20Business%20Planning&v=60', 'color' => 'primary'])
    Add to Yahoo Calendar
@endcomponent



Registration Information<br>
Name: {{ $registrant->first_name }} {{ $registrant->last_name }}<br>
Email Address: {{ $registrant->email }}<br>
Phone Number: {{ $registrant->phone }}<br>
Company: {{ $registrant->company }}<br>
Attending: @if ($registrant->in_person) In Person @else Zoom @endif<br>
Message: {{ $registrant->message }}
@endcomponent
