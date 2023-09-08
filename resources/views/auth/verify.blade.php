<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('صفحة التحقق يرجى ادخال رمز التحقق المرسل الايميل الخاص بك') }}
    </div>

    <form method="POST" action="{{ route('verify.store') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('كود التحقق')" />

            <x-text-input id="code" class="block mt-1 w-full"
                            type="text"
                            name="code"
                            required/>

            <x-input-error :messages="$errors->get('code')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('تأكيد') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
