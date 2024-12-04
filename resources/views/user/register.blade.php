<x-layout>
    <h3>ثبت نام</h3>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 border shadow-sm rounded p-2">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="input-group mb-3">
                    <span class="input-group-text" id="mobile">
                        <i class="bi bi-user"></i>
                    </span>
                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" placeholder="نام" aria-label="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="mobile">
                        <i class="bi bi-phone"></i>
                    </span>
                    <input type="text" class="form-control form-control-sm @error('mobile') is-invalid @enderror" name="mobile" placeholder="موبایل" aria-label="mobile">
                    @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="password">
                        <i class="bi bi-key"></i>
                    </span>
                    <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" placeholder="کلمه عبور" aria-label="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-success btn-sm w-100">ثبت نام</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
