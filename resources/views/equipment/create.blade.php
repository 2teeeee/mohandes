<x-layout>
    <h3>فرم ثبت ابزار</h3>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 border shadow-sm rounded p-2">
            <form method="POST" action="{{ route('equipmentDefine') }}">
                @csrf

                <div class="mb-3">
                    <label for="value" class="form-label">مقدار</label>
                    <input type="text" class="form-control form-control-sm @error('value') is-invalid @enderror" name="value" placeholder="مقدار" aria-label="value">
                    @error('value')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-success btn-sm w-100">ثبت فرم</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
