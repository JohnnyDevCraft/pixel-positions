<x-layouts.main-layout>
    <x-widget.section-heading>Log In</x-widget.section-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />

        <x-forms.button class="p-10">Login</x-forms.button>
    </x-forms.form>
</x-layouts.main-layout>
