<x-layout>
    <x-page-heading>Create Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Chief of R&D division" />
        <x-forms.input label="Salary" name="salary" placeholder="$70,000 USD" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
