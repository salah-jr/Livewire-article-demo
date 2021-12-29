<form wire:submit.prevent="saveMessage" autocomplete="off" class="contact100-form validate-form">

    @csrf

    <div class="card-body px-0">
        @if (Session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (Session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>


    <span class="contact100-form-title">
        Send Us A Message
    </span>


    @error('name') <div class="text-danger"><small>*{{ $message }}</small></div> @enderror
    @error('email') <div class="text-danger"><small>*{{ $message }}</small></div> @enderror
    @error('message') <div class="text-danger"><small>*{{ $message }}</small></div> <br> @enderror


    <div class="wrap-input100 validate-input" data-validate="Please enter your name">
        <input wire:model="name" class="input100" type="text" name="name" placeholder="Full Name">
        <span class="focus-input100"></span>
    </div>


    <div class="wrap-input100 validate-input" data-validate="Please enter your email">
        <input wire:model="email" class="input100" type="email" name="name" placeholder="Email address">
        <span class="focus-input100"></span>
    </div>
    

    <div class="wrap-input100 validate-input" data-validate="Please enter your message">
        <textarea wire:model="message" class="input100" name="message" placeholder="Your Message"></textarea>
        <span class="focus-input100"></span>
    </div>


    <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" type="submit"">
            <span>
                <i class=" fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
            Send
            </span>
        </button>
    </div>

</form>
