@component('mail::message')
# 2022 Business Planning Event

Dear {{ $guest->first_name }},

We have received your registration for the 2022 Business Planning Event on November 30th, 2021.

We look forward to seeing you there!

@component('mail::button', ['url' => 'https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20210714T130000Z%2F20210714T163000Z&details=8%3A00%20-%20Hot%20Breakfast%0A9%3A00%20-%20John%20P.%20Rahoy%0A10%3A00%20-%20Jared%20James&location=Holiday%20Inn%20Southwest%2C%2010709%20Watson%20Road%2C%20Saint%20Louis%2C%20MO%2063127&text=Jared%20James%20Live%20Event', 'color' => 'primary'])
    Add to Google Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.office.com/calendar/0/deeplink/compose?body=8%3A00%20-%20Hot%20Breakfast%0A9%3A00%20-%20John%20P.%20Rahoy%0A10%3A00%20-%20Jared%20James&enddt=2021-07-14T16%3A30%3A00%2B00%3A00&location=Holiday%20Inn%20Southwest%2C%2010709%20Watson%20Road%2C%20Saint%20Louis%2C%20MO%2063127&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2021-07-14T13%3A00%3A00%2B00%3A00&subject=Jared%20James%20Live%20Event', 'color' => 'primary'])
    Add to Office365 Calendar
@endcomponent
@component('mail::button', ['url' => 'https://calendar.yahoo.com/?desc=8%3A00%20-%20Hot%20Breakfast%0A9%3A00%20-%20John%20P.%20Rahoy%0A10%3A00%20-%20Jared%20James&et=20210714T163000Z&in_loc=Holiday%20Inn%20Southwest%2C%2010709%20Watson%20Road%2C%20Saint%20Louis%2C%20MO%2063127&st=20210714T130000Z&title=Jared%20James%20Live%20Event&v=60', 'color' => 'primary'])
    Add to Yahoo Calendar
@endcomponent



Registration Information<br>
Name: {{ $registrant->first_name }} {{ $registrant->last_name }}<br>
Email Address: {{ $registrant->email }}<br>
@endcomponent
