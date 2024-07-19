@extends('layout')
@section('title','Contact US')
@section('header_title','Get in Touch')
@section('content')
<div class="card_4">
    <div class="aboutnote">
        <div class="title">
            <div class="padding_15">
                <div class="blue">
                    <div class="bold">
                            General Inquiries
                        </div>
                    </div>
                </div>
            </div>
            <div class="desc">
                <div class="padding_15">
            For questions about our services or platform, email us at
        </div>
    </div>
</div>
<div class="about_grid">
    <div class="card_3">
        <div class="title">
            <div class="padding_15">
                <div class="blue">
                    <div class="bold">
                        Social Media
                    </div>
                </div>
            </div>
        </div>
        <div class="padding_15">
            <div class="subtitle">
                <div class="green">
                    <div class="bold">
                    Connect with us on social media:
                </div>
                </div>
            </div>
        </div>
        <div class="desc">
            <div class="bold">
            <div class="padding_15">
                <ul>
                    <li><img src="{{url('assets\imgs\logo\fb.png')}}" alt="ss">  <a href="https://www.facebook.com/fitbuild">https://www.facebook.com/fitbuild</a></li>
                    <li><img src="{{url('assets\imgs\logo\tw.png')}}" alt="ss"> <a href="https://twitter.com/fitbuild"> https://twitter.com/fitbuild</a></li>
                    <li><img src="{{url('assets\imgs\logo\ins.png')}}" alt="ss"> <a href="https://www.instagram.com/fitbuild">https://www.instagram.com/fitbuild</a></li>
                    <li><img src="{{url('assets\imgs\logo\li.png')}}" alt="ss"> <a style="overflow: auto" href="https://www.linkedin.com/company/fitbuild">https://www.linkedin.com/company/fitbuild</a></li>
                    <li><img src="{{url('assets\imgs\logo\wa.png')}}" alt="ss"> <a href="https://wa.me/+1234567890">+1234567890</a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>

    <div class="card_3">
        <div class="title">
            <div class="padding_15">
                <div class="blue">
                    <div class="bold">
                        Feedback
                    </div>
                </div>
            </div>
        </div>

        
        <div class="desc">
            <div class="padding_15">
                We value your feedback! Share your suggestions or ideas for improvement with us at 
                <a href="mailto:FitBuildFeed@gmail.com">FitBuildFeed@gmail.com</a>
            </div>
        </div>

        </div>

   
<div style="height: 40px"></div>

    
@endsection

