<div id="getintouch" class="section">
    <div class="container">
        <div class="heading">
            <span class="icon-logo"><img src="{{ $iconUrl ?? asset('images/icon-logo.png') }}" alt="Contact Logo"></span>
            <h2>Get in Touch with Us</h2>
            <p class="lead">Have a query or need assistance? Reach out to our 24x7 patient support desk or send us a message below.</p>
        </div>

        <div class="row align-items-stretch" style="margin-bottom: 50px;">
            <!-- Left Column: Hospital Contact Details Card -->
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mb-4" style="margin-bottom: 30px;">
                <div class="contact-info-card">
                    <div class="contact-card-header">
                        <h3><i class="fa fa-hospital-o mr-2"></i> LifeCare Hospital</h3>
                        <p>Super Speciality Healthcare Center in Rajkot, Gujarat</p>
                    </div>

                    <div class="contact-methods-list">
                        <!-- Emergency Hotline -->
                        <div class="contact-method-item emergency-highlight">
                            <div class="method-icon"><i class="fa fa-ambulance"></i></div>
                            <div class="method-details">
                                <span class="method-label">24x7 Emergency & Trauma</span>
                                <a href="tel:{{ $settings['business_phone'] ?? $settings['phone'] ?? '+919825012345' }}" class="method-value">
                                    {{ $settings['business_phone'] ?? $settings['phone'] ?? '+91 98250 12345' }}
                                </a>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="contact-method-item">
                            <div class="method-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="method-details">
                                <span class="method-label">Hospital Location</span>
                                <span class="method-value" style="font-size: 13.5px; line-height: 1.4;">
                                    {{ $settings["address"] ?? '150 Feet Ring Road, Near KKV Hall, Kalawad Road Corner, Rajkot, Gujarat - 360005' }}
                                </span>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-method-item">
                            <div class="method-icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="method-details">
                                <span class="method-label">Email Support</span>
                                <a href="mailto:{{ $settings['business_email'] ?? $settings['email'] ?? 'contact@lifecarehospitalrajkot.com' }}" class="method-value">
                                    {{ $settings['business_email'] ?? $settings['email'] ?? 'contact@lifecarehospitalrajkot.com' }}
                                </a>
                            </div>
                        </div>

                        <!-- OPD Timings -->
                        <div class="contact-method-item">
                            <div class="method-icon"><i class="fa fa-clock-o"></i></div>
                            <div class="method-details">
                                <span class="method-label">OPD Consultation Hours</span>
                                <span class="method-value">Mon - Sat: 08:30 AM – 09:00 PM | Sun: 09:00 AM – 01:00 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Modern Interactive Send Message Form -->
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="margin-bottom: 30px;">
                <div class="contact-form-card">
                    <div class="form-card-header">
                        <h3><i class="fa fa-paper-plane-o text-primary mr-2"></i> Send Us a Message</h3>
                        <p class="text-muted" style="font-size: 13.5px; margin-bottom: 0;">Our patient care team typically responds within 2 business hours.</p>
                    </div>

                    <form id="ajax-contact" wire:submit.prevent="add_to_contact" class="mt-4">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <label class="contact-label"><i class="fa fa-user-o mr-1"></i> Your Name</label>
                                    <input type="text" 
                                           class="form-control modern-input" 
                                           placeholder="e.g. Ramesh Patel" 
                                           wire:model.lazy="name" 
                                           required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <label class="contact-label"><i class="fa fa-envelope-o mr-1"></i> Email Address</label>
                                    <input type="email" 
                                           class="form-control modern-input" 
                                           wire:model.lazy="email" 
                                           placeholder="e.g. ramesh@example.com" 
                                           required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <label class="contact-label"><i class="fa fa-phone mr-1"></i> Contact Phone</label>
                                    <input type="tel" 
                                           class="form-control modern-input" 
                                           id="phone" 
                                           wire:model.lazy="phone" 
                                           placeholder="10-digit mobile number" 
                                           required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <label class="contact-label"><i class="fa fa-tag mr-1"></i> Subject</label>
                                    <input type="text" 
                                           class="form-control modern-input" 
                                           id="subject" 
                                           wire:model.lazy="subject" 
                                           placeholder="e.g. OPD Inquiry / Doctor Appointment" 
                                           required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label class="contact-label"><i class="fa fa-comment-o mr-1"></i> Message</label>
                                    <textarea class="form-control modern-input" 
                                              id="message" 
                                              rows="4" 
                                              placeholder="Write your inquiry or question here..." 
                                              wire:model.lazy="message" 
                                              required></textarea>
                                </div>
                                <div class="actions">
                                    <button type="submit" id="submitButton" class="btn-send-message">
                                        <span>Send Message</span>
                                        <i class="fa fa-paper-plane ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    @if (session()->has('message'))
                        <div class="alert alert-success mt-3" style="border-radius: 8px; font-size: 14px;">
                            <i class="fa fa-check-circle mr-1"></i> {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Google Map Section (Clean Rounded Frame) -->
        <div class="map-wrapper-card">
            <iframe 
                width="100%" 
                height="380" 
                frameborder="0" 
                scrolling="no" 
                marginheight="0" 
                marginwidth="0" 
                src="https://maps.google.com/maps?q={{ urlencode($settings['address'] ?? '150 Feet Ring Road, Rajkot') }}&t=&z=14&ie=UTF8&iwloc=&output=embed" 
                style="border:0; width:100%; height:380px; display:block;">
            </iframe>
        </div>
    </div>
</div>
