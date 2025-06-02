<p><strong>Name:</strong> {{ $data['form_name'] }}</p>
<p><strong>Email:</strong> {{ $data['form_email'] }}</p>
@if(!empty($data['form_phone']))
<p><strong>Phone:</strong> {{ $data['form_phone'] }}</p>
@endif
@if(!empty($data['form_subject']))
<p><strong>Subject:</strong> {{ $data['form_subject'] }}</p>
@endif
<p><strong>Message:</strong></p>
<p>{{ $data['form_message'] }}</p>