<p>{{ $enquiry->enquiry_message }}</p>
<p>Your complaint status is
    @if ($enquiry->status == 'pending')
        <span style="color:red">{{ $enquiry->status }}</span>
    @else
    <span style="color:green">{{ $enquiry->status }}</span>
    @endif
    .</p>
