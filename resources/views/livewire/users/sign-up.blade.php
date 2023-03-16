<div class="space-y-16px" x-data="signupData">
    <h1 class="text-center font-bold text-24px" x-text="title"></h1>

    <div class="space-y-16px">
        <div class="grid grid-cols-2 gap-16px">
            <x-forms.inputs.text-input placeholder="First Name" class="w-full" wire-model="first_name" />
            <x-forms.inputs.text-input placeholder="Last Name" class="w-full" wire-model="last_name" />
        </div>

        <x-forms.inputs.text-input placeholder="Phone" class="w-full" wire-model="phone" />
        <x-forms.inputs.text-input placeholder="Email" class="w-full" wire-model="email" />

        <div class="mt-4">
            <label>
                <input type="checkbox" :checked="isChecked" />
                <span class="ml-2 font-medium">Checked</span>
            </label>
        </div>

        <div class="flex justify-center">
            <x-forms.buttons.default-button title="Next" type="submit" class="px-65px" :disabled="$isButtonDisabled" alpine-directives="@click=submit" />
        </div>
    </div>

    <a href="{{ route('auth.facebook.redirect') }}" class="block w-full bg-blue-600 text-white font-medium rounded-md text-center p-10px">Facebok Auth</a>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            Alpine.data('signupData', () => ({
                title: @entangle('title'),
                isChecked: @entangle('isChecked'),

                submit() {
                    this.isChecked = !this.isChecked
                    console.log('alpine submit here')
                    @this.submit()
                }
            }))
        })
    </script>
@endpush
