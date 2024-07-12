<x-layouts.main-layout>
    <x-widget.page-header>New Job</x-widget.page-header>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO..."/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Winter Park, FL"/>

        <x-forms.select label="Schedule" name="schedule">
            <option value="Full Time">Full Time</option>
            <option value="Full Time">Part Time</option>
            <option value="Full Time">Contract</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://eample.com..."/>

        <x-forms.divider/>

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>
        <x-forms.input label="Tags (Comma Separated)" name="tags" placeholder="tag1,tag2..."/>
        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layouts.main-layout>
