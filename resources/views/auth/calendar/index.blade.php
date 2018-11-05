@extends('layouts.app')
@section('content')
<div class="container">
<h2 class="text-center  text-uppercase text-secondary mb-0">Schedule</h2>
<div class="cd-schedule loading">
	<div class="timeline">
		<ul>
			<li><span>09:00</span></li>
			<li><span>09:30</span></li>
			<li><span>10:00</span></li>
			<li><span>10:30</span></li>
			<li><span>11:00</span></li>
			<li><span>11:30</span></li>
			<li><span>12:00</span></li>
			<li><span>12:30</span></li>
			<li><span>13:00</span></li>
			<li><span>13:30</span></li>
			<li><span>14:00</span></li>
			<li><span>14:30</span></li>
			<li><span>15:00</span></li>
			<li><span>15:30</span></li>
			<li><span>16:00</span></li>
			<li><span>16:30</span></li>
			<li><span>17:00</span></li>
			<li><span>17:30</span></li>
			<li><span>18:00</span></li>
		</ul>
	</div> <!-- .timeline -->

	<div class="events">
		<ul>
			<li class="events-group body-bg-red">
				<div class="top-info"><span>Monday</span></div>

				<ul>

					@foreach($events as $event)
					@if($event->startDateTime->format('l') == "Monday")
						<li class="single-event" data-start= "{{ $event->startDateTime->format('H:i') }} " data-end="{{ $event->endDateTime->format('H:i') }}" data-content="event-abs-circuit" data-event="event-1">
							<a href="#0">
								<em class="event-name">Evan Google Calendar Busy </em>
							</a>
						</li>
					@endif
					@endforeach
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Tuesday</span></div>

				<ul>
				
					@foreach($events as $event)
					@if($event->startDateTime->format('l') == "Tuesday")
						<li class="single-event" data-start= "{{ $event->startDateTime->format('H:i') }} " data-end="{{ $event->endDateTime->format('H:i') }}" data-content="event-abs-circuit" data-event="event-1">
							<a href="#0">
								<em class="event-name">Evan Google Calendar Busy </em>
							</a>
						</li>
					@endif
					@endforeach
				
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Wednesday</span></div>

				<ul>
					@foreach($events as $event)
					@if($event->startDateTime->format('l') == "Wednesday")
						<li class="single-event" data-start= "{{ $event->startDateTime->format('H:i') }} " data-end="{{ $event->endDateTime->format('H:i') }}" data-content="event-abs-circuit" data-event="event-1">
							<a href="#0">
								<em class="event-name">Evan Google Calendar Busy </em>
							</a>
						</li>
					@endif
					@endforeach
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Thursday</span></div>

				<ul>
					@foreach($events as $event)
					@if($event->startDateTime->format('l') == "Thursday")
						<li class="single-event" data-start= "{{ $event->startDateTime->format('H:i') }} " data-end="{{ $event->endDateTime->format('H:i') }}" data-content="event-abs-circuit" data-event="event-1">
							<a href="#0">
								<em class="event-name">Evan Google Calendar Busy </em>
							</a>
						</li>
					@endif
					@endforeach
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Friday</span></div>

				<ul>

					@foreach($events as $event)
					@if($event->startDateTime->format('l') == "Friday")
						<li class="single-event" data-start= "{{ $event->startDateTime->format('H:i') }} " data-end="{{ $event->endDateTime->format('H:i') }}" data-content="event-abs-circuit" data-event="event-1">
							<a href="#0">
								<em class="event-name">Evan Google Calendar Busy </em>
							</a>
						</li>
					@endif
					@endforeach
				</ul>
			</li>
		</ul>
	</div>

	<div class="event-modal">
		<header class="header">
			<div class="content">
				<span class="event-date"></span>
				<h3 class="event-name"></h3>
			</div>

			<div class="header-bg"></div>
		</header>

		<div class="body">
			<div class="event-info"></div>
			<div class="body-bg"></div>
		</div>

		<a href="#0" class="close">Close</a>
	</div>

	<div class="cover-layer"></div>
</div> <!-- .cd-schedule -->
<script src="js/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</div>
@endsection