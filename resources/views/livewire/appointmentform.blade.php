<div class="appointment-form-box" style="width: 100%;">
    <div class="appointment-form">
        <h3><i class="fa fa-calendar-check-o text-primary mr-2"></i> Book Appointment</h3>
        <p class="text-muted" style="font-size: 13px; margin-top: -10px; margin-bottom: 20px;">
            Consult with our super specialists. We will confirm your slot via SMS/Call.
        </p>

        <form wire:submit.prevent="store_requested_appointment()">
            <div class="form-group mb-3">
                <label style="font-size: 12.5px; font-weight: 600; color: #475569; margin-bottom: 4px;">Full Name</label>
                <input type="text" 
                       wire:model.lazy="name" 
                       name="name" 
                       placeholder="e.g. Ramesh Shah" 
                       class="form-control" 
                       required />
                @error('name') <span class="text-danger" style="font-size: 12px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mb-3">
                <label style="font-size: 12.5px; font-weight: 600; color: #475569; margin-bottom: 4px;">Email Address</label>
                <input type="email" 
                       placeholder="name@example.com" 
                       wire:model.lazy="email" 
                       class="form-control" 
                       required />
                @error('email') <span class="text-danger" style="font-size: 12px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mb-3">
                <label style="font-size: 12.5px; font-weight: 600; color: #475569; margin-bottom: 4px;">Phone Number</label>
                <input type="tel" 
                       wire:model.lazy="phone" 
                       placeholder="10-digit mobile number" 
                       class="form-control" 
                       required />
                @error('phone') <span class="text-danger" style="font-size: 12px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mb-3">
                <label style="font-size: 12.5px; font-weight: 600; color: #475569; margin-bottom: 4px;">City / Area</label>
                <input type="text" 
                       wire:model.lazy="address" 
                       name="address" 
                       placeholder="e.g. Kalawad Road, Rajkot" 
                       class="form-control" 
                       required />
                @error('address') <span class="text-danger" style="font-size: 12px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mb-3">
                <label style="font-size: 12.5px; font-weight: 600; color: #475569; margin-bottom: 4px;">Preferred Date & Time</label>
                <input type="datetime-local" 
                       name="stime" 
                       wire:model.lazy="stime" 
                       class="form-control" 
                       required />
                @error('stime') <span class="text-danger" style="font-size: 12px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mb-3">
                <label style="font-size: 12.5px; font-weight: 600; color: #475569; margin-bottom: 4px;">Select Doctor / Speciality</label>
                <select wire:model.lazy="doctor" name="doctor" class="form-control" required>
                    <option value="">-- Choose Specialist Doctor --</option>
                    @forelse (\App\Models\doctor::with('employ')->get() as $doc)
                        <option value="{{ $doc->employ->name ?? $doc->name }}">
                            {{ $doc->employ->name ?? $doc->name }} ({{ $doc->employ->qualification ?? 'Specialist' }})
                        </option>
                    @empty
                        <option value="General OPD">General OPD In-Charge</option>
                    @endforelse
                </select>
                @error('doctor') <span class="text-danger" style="font-size: 12px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mb-3">
                <label style="font-size: 12.5px; font-weight: 600; color: #475569; margin-bottom: 4px;">Symptoms or Message (Optional)</label>
                <textarea wire:model.lazy="message" 
                          rows="3" 
                          class="form-control" 
                          placeholder="Describe your health concern briefly..."></textarea>
                @error('message') <span class="text-danger" style="font-size: 12px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mt-3">
                <button type="submit" 
                        class="btn btn-primary btn-block"
                        style="background: linear-gradient(135deg, #0071d1 0%, #0056a3 100%); border: none; height: 48px; border-radius: 8px; font-size: 15px; font-weight: 700; box-shadow: 0 4px 15px rgba(0, 113, 209, 0.3); transition: all 0.25s ease;">
                    <i class="fa fa-calendar-check-o mr-1"></i> Confirm Appointment
                </button>
            </div>

            @if (session()->has('message'))
                <div class="alert alert-success mt-3" style="border-radius: 8px; font-size: 13.5px;">
                    <i class="fa fa-check-circle mr-1"></i> {{ session('message') }}
                </div>
            @endif
        </form>
    </div>
</div>
