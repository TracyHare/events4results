@component('mail::message')
# Continuing Education

Dear {{ $registrant->first_name }},

We have received your registration for {{ $registrant->class }} @if($registrant->lunch != 'No Lunch') including lunch @endif on January 25th, 2022.

We look forward to seeing you there!


@if($registrant->class == 'Federal Fair Housing' && $registrant->lunch == 'No Lunch')
@component('mail::button', ['url' => 'https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20220125T150000Z%2F20220125T180000Z&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&text=Continuing%20Education', 'color' => 'primary'])
    Add to Google Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.live.com/calendar/0/deeplink/compose?enddt=2022-01-25T18%3A00%3A00%2B00%3A00&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2022-01-25T15%3A00%3A00%2B00%3A00&subject=Continuing%20Education', 'color' => 'primary'])
    Add to Outlook Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.office.com/calendar/0/deeplink/compose?enddt=2022-01-25T18%3A00%3A00%2B00%3A00&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2022-01-25T15%3A00%3A00%2B00%3A00&subject=Continuing%20Education', 'color' => 'primary'])
    Add to Office365 Calendar
@endcomponent
@component('mail::button', ['url' => 'https://calendar.yahoo.com/?et=20220125T180000Z&in_loc=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&st=20220125T150000Z&title=Continuing%20Education&v=60', 'color' => 'primary'])
    Add to Yahoo Calendar
@endcomponent
@elseif($registrant->class == 'Federal Fair Housing' && $registrant->lunch != 'No Lunch')
@component('mail::button', ['url' => 'https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20220125T150000Z%2F20220125T190000Z&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&text=Continuing%20Education', 'color' => 'primary'])
    Add to Google Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.live.com/calendar/0/deeplink/compose?enddt=2022-01-25T19%3A00%3A00%2B00%3A00&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2022-01-25T15%3A00%3A00%2B00%3A00&subject=Continuing%20Education', 'color' => 'primary'])
    Add to Outlook Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.office.com/calendar/0/deeplink/compose?enddt=2022-01-25T19%3A00%3A00%2B00%3A00&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2022-01-25T15%3A00%3A00%2B00%3A00&subject=Continuing%20Education', 'color' => 'primary'])
    Add to Office365 Calendar
@endcomponent
@component('mail::button', ['url' => 'https://calendar.yahoo.com/?et=20220125T190000Z&in_loc=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&st=20220125T150000Z&title=Continuing%20Education&v=60', 'color' => 'primary'])
    Add to Yahoo Calendar
@endcomponent
@elseif($registrant->class == 'Smart Growth for the 21st Century' && $registrant->lunch == 'No Lunch')
@component('mail::button', ['url' => 'https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20220125T190000Z%2F20220125T220000Z&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&text=Continuing%20Education', 'color' => 'primary'])
    Add to Google Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.live.com/calendar/0/deeplink/compose?enddt=2022-01-25T22%3A00%3A00%2B00%3A00&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2022-01-25T19%3A00%3A00%2B00%3A00&subject=Continuing%20Education', 'color' => 'primary'])
    Add to Outlook Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.office.com/calendar/0/deeplink/compose?enddt=2022-01-25T22%3A00%3A00%2B00%3A00&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2022-01-25T19%3A00%3A00%2B00%3A00&subject=Continuing%20Education', 'color' => 'primary'])
    Add to Office365 Calendar
@endcomponent
@component('mail::button', ['url' => 'https://calendar.yahoo.com/?et=20220125T220000Z&in_loc=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&st=20220125T190000Z&title=Continuing%20Education&v=60', 'color' => 'primary'])
    Add to Yahoo Calendar
@endcomponent
@elseif($registrant->class == 'Smart Growth for the 21st Century' && $registrant->lunch != 'No Lunch')
@component('mail::button', ['url' => 'https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20220125T180000Z%2F20220125T220000Z&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&text=Continuing%20Education', 'color' => 'primary'])
    Add to Google Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.live.com/calendar/0/deeplink/compose?enddt=2022-01-25T22%3A00%3A00%2B00%3A00&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2022-01-25T18%3A00%3A00%2B00%3A00&subject=Continuing%20Education', 'color' => 'primary'])
    Add to Outlook Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.office.com/calendar/0/deeplink/compose?enddt=2022-01-25T22%3A00%3A00%2B00%3A00&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2022-01-25T18%3A00%3A00%2B00%3A00&subject=Continuing%20Education', 'color' => 'primary'])
    Add to Office365 Calendar
@endcomponent
@component('mail::button', ['url' => 'https://calendar.yahoo.com/?et=20220125T220000Z&in_loc=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&st=20220125T180000Z&title=Continuing%20Education&v=60', 'color' => 'primary'])
    Add to Yahoo Calendar
@endcomponent
@else
@component('mail::button', ['url' => 'https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20220125T150000Z%2F20220125T220000Z&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&text=Continuing%20Education', 'color' => 'primary'])
    Add to Google Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.live.com/calendar/0/deeplink/compose?enddt=2022-01-25T22%3A00%3A00%2B00%3A00&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2022-01-25T15%3A00%3A00%2B00%3A00&subject=Continuing%20Education', 'color' => 'primary'])
    Add to Outlook Calendar
@endcomponent
@component('mail::button', ['url' => 'https://outlook.office.com/calendar/0/deeplink/compose?enddt=2022-01-25T22%3A00%3A00%2B00%3A00&location=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2022-01-25T15%3A00%3A00%2B00%3A00&subject=Continuing%20Education', 'color' => 'primary'])
    Add to Office365 Calendar
@endcomponent
@component('mail::button', ['url' => 'https://calendar.yahoo.com/?et=20220125T220000Z&in_loc=1050%20Des%20Peres%20Rd%2C%20Des%20Peres%2C%20MO%2063131&st=20220125T150000Z&title=Continuing%20Education&v=60', 'color' => 'primary'])
    Add to Yahoo Calendar
@endcomponent
@endif



Registration Information<br>
Name: {{ $registrant->first_name }} {{ $registrant->last_name }}<br>
Email Address: {{ $registrant->email }}<br>
Phone Number: {{ $registrant->phone }}<br>
MO License #: {{ $registrant->license }}<br>
Class(es): {{ $registrant->class }}<br>
Lunch Choice: {{ $registrant->lunch }}<br>
Message: {{ $registrant->message }}
@endcomponent






