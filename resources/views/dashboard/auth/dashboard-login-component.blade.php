<form class="mb-3 needs-validation" wire:submit.prevent='submit' novalidate>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="bs-validation-name" placeholder="Enter your email" autofocus wire:model='email' />
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                   aria-describedby="password" wire:model='password' />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input @error('remember') is-invalid @enderror" type="checkbox" wire:model='remember' />
            @error('remember')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid gap-2 w-100" type="submit" wire:loading.attr="disabled">
           <div class="d-flex justify-center align-items-center m-auto">
               <span wire:loading.remove>Sign in</span>
               <span class="spinner-grow spinner-border-sm text-white ms-1" style="width: 1.5rem;height: 1.5rem"
                     role="status" wire:loading wire:target="submit"
               >
                    <span class="visually-hidden">Loading...</span>
                </span>
           </div>
        </button>

    </div>
</form>
