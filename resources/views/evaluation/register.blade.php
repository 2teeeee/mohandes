<x-layout>
    <h3>فرم ثبت اطلاعات</h3>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 border shadow-sm rounded p-2">
            <form method="POST" action="{{ route('evaluationDefine') }}"  enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="vahed" class="form-label">واحد</label>
                    <input type="text" class="form-control form-control-sm @error('vahed') is-invalid @enderror" name="vahed" placeholder="واحد" aria-label="vahed">
                    @error('vahed')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="shoghl" class="form-label">شغل</label>
                    <input type="text" class="form-control form-control-sm @error('shoghl') is-invalid @enderror" name="shoghl" placeholder="شغل" aria-label="shoghl">
                    @error('shoghl')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">نام و نام خانوادگی</label>
                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" placeholder="نام و نام خانوادگی" aria-label="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sath-shghl" class="form-label">سطح شغل</label>
                    <input type="text" class="form-control form-control-sm @error('sath_shghl') is-invalid @enderror" name="sath_shghl" placeholder="سطح شغل" aria-label="sath-shghl">
                    @error('sath_shghl')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">تصویر</label>
                    <input type="file" class="form-control form-control-sm @error('image') is-invalid @enderror" name="image" placeholder="تصویر" aria-label="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <label for="khatarat-id" class="form-label">خطرات</label>
                    <select class="form-select" aria-label="khatarat" name="khatarat_id">
                        @foreach($khatarats as $khatar)
                            <option value="{{$khatar->id}}">{{$khatar->value}}</option>
                        @endforeach
                    </select>
                    @error('khatarat_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="payamadha" class="form-label">پیامدها</label>
                    <input type="text" class="form-control form-control-sm @error('payamadha') is-invalid @enderror" name="payamadha" placeholder="پیامدها" aria-label="payamadha">
                    @error('payamadha')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="firstRisk-num-shedat" class="form-label">ریسک اولیه - شماره شدت</label>
                    <input type="text" class="form-control form-control-sm @error('firstRisk_num_shedat') is-invalid @enderror" name="firstRisk_num_shedat" placeholder="ریسک اولیه شماره شدت" aria-label="firstRisk-num-shedat">
                    @error('firstRisk_num_shedat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="firstRisk-num-ehtemal" class="form-label">ریسک اولیه - شماره احتمال</label>
                    <input type="text" class="form-control form-control-sm @error('firstRisk_num_ehtemal') is-invalid @enderror" name="firstRisk_num_ehtemal" placeholder="ریسک اولیه شماره احتمال" aria-label="firstRisk-num-ehtemal">
                    @error('firstRisk_num_ehtemal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="firstRisk-num-risk" class="form-label">ریسک اولیه - شماره ریسک</label>
                    <input type="text" class="form-control form-control-sm @error('firstRisk_num_risk') is-invalid @enderror" name="firstRisk_num_risk" placeholder="ریسک اولیه شماره ریسک" aria-label="firstRisk-num-risk">
                    @error('firstRisk_num_risk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="controls" class="form-label">کنترل ها</label>
                    <input type="text" class="form-control form-control-sm @error('controls') is-invalid @enderror" name="controls" placeholder="کنترل ها" aria-label="controls">
                    @error('controls')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sathRisk-num-shedat" class="form-label">سطح ریسک - شماره شدت</label>
                    <input type="text" class="form-control form-control-sm @error('sathRisk_num_shedat') is-invalid @enderror" name="sathRisk_num_shedat" placeholder="سطح ریسک شماره شدت" aria-label="sathRisk-num-shedat">
                    @error('sathRisk_num_shedat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sathRisk-num-ehtemal" class="form-label">سطح ریسک - شماره احتمال</label>
                    <input type="text" class="form-control form-control-sm @error('sathRisk_num_ehtemal') is-invalid @enderror" name="sathRisk_num_ehtemal" placeholder="سطح ریسک شماره احتمال" aria-label="sathRisk-num-ehtemal">
                    @error('sathRisk_num_ehtemal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sathRisk-num-risk" class="form-label">سطح ریسک - شماره ریسک</label>
                    <input type="text" class="form-control form-control-sm @error('sathRisk_num_risk') is-invalid @enderror" name="sathRisk_num_risk" placeholder="سطح ریسک شماره ریسک" aria-label="sathRisk-num-risk">
                    @error('sathRisk_num_risk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="rahkar" class="form-label">راهکار ها</label>
                    <input type="text" class="form-control form-control-sm @error('rahkar') is-invalid @enderror" name="rahkar" placeholder="راهکار ها" aria-label="rahkar">
                    @error('rahkar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="masool_eghdam" class="form-label">مسئول اقدام</label>
                    <input type="text" class="form-control form-control-sm @error('masool_eghdam') is-invalid @enderror" name="masool_eghdam" placeholder="مسئول اقدام" aria-label="masool_eghdam">
                    @error('masool_eghdam')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <label for="education" class="form-label">آموزش ها</label>
                    <select class="form-select" aria-label="education" name="education">
                        @foreach($educations as $edu)
                            <option value="{{$edu->id}}">{{$edu->value}}</option>
                        @endforeach
                    </select>
                    @error('education')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <label for="equipment" class="form-label">ابزارها</label>
                    <select class="form-select" aria-label="equipment" name="equipment">
                        @foreach($equipments as $equ)
                            <option value="{{$equ->id}}">{{$equ->value}}</option>
                        @endforeach
                    </select>
                    @error('equipment')
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
