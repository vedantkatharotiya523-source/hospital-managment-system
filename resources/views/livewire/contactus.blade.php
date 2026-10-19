<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
    <div class="container">
        <div class="heading">
            <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="#"></span>
            <h2>Get in Touch</h2>
        </div>
    </div>
    <div class="contact-section" style="position: relative; min-height: 500px; background: #e9ecef; overflow: hidden;">
        <div class="form-contant" style="z-index: 2;">
            <form id="ajax-contact" wire:submit.prevent="add_to_contact">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group in_name">
                            <input type="text" class="form-control" placeholder="Name" wire:model.lazy="name"
                                required="required" style="color: #fff;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="email" class="form-control" wire:model.lazy="email" placeholder="E-mail"
                                required="required" style="color: #fff;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="tel" class="form-control" id="phone" wire:model.lazy="phone"
                                placeholder="Phone" required="required" style="color: #fff;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="text" class="form-control" id="subject" wire:model.lazy="subject"
                                placeholder="Subject" required="required" style="color: #fff;">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group in_message">
                            <textarea class="form-control" id="message" rows="5" placeholder="Message"
                                wire:model.lazy="message" required="required" style="color: #fff;"></textarea>
                        </div>
                        <div class="actions">
                            <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small"
                                title="Submit Your Message!">
                        </div>
                    </div>
                </div>
            </form>
            @if (session()->has('message'))
                <script>
                    alert('{{ session('message') }}');
                </script>
            @endif
        </div>
        <div id="googleMap" style="width: 100%; height: 500px;">
            <iframe 
                width="100%" 
                height="100%" 
                frameborder="0" 
                scrolling="no" 
                marginheight="0" 
                marginwidth="0" 
                src="https://maps.google.com/maps?q={{ urlencode($settings['address'] ?? 'Hospital') }}&t=&z=14&ie=UTF8&iwloc=&output=embed" 
                style="border:0; width:100%; height:100%; min-height: 500px;">
            </iframe>
        </div>
    </div>
</div>
