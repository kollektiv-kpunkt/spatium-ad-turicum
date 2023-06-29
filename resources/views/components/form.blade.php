<div class="sat-signup-form sat-section" id="petition">
    <div class="sat-signup-form__container">
        <div class="fdb-signup-form__inner">
            <form action="/supporters" method="POST" class="sat-form mt-6">
                @foreach (__("sat.form.fields") as $field)
                    <x-form-field :name="$field['name']" :label="$field['label']" :placeholder="$field['placeholder'] ?? ''" :required="$field['required']" :type="$field['type']" :checked="$field['checked'] ?? false" :classes="$field['class'] ?? false" />
                @endforeach
                @csrf
                <input type="hidden" name="source" value="{{$_COOKIE['sat_source'] ?? ""}}">
                <input type="hidden" name="locale" value="{{app()->getLocale()}}">
                <button type="submit" class="sat-button !bg-white !text-gruen w-full flex justify-center items-center gap-x-2 mt-2 font-bold">{{__("sat.form.submit") }}  <i class="icofont-duotone icofont-apply"></i></button>
            </form>
        </div>
    </div>
</div>
