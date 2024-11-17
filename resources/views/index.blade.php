<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <title>Title</title>
</head>
<body>
    <div class="ml-5 mt-5">
        <div>
            <h1 class="text-3xl font-bold underline">
                Hello, world!
            </h1>
        </div>

        <div>
            <button class="bg-sky-500 hover:bg-sky-700">
                Save changes
            </button>
        </div>

        <div>
            <a href="#" class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                <div class="flex items-center space-x-3">
                    <svg class="h-6 w-6 stroke-sky-500 group-hover:stroke-white" fill="none" viewBox="0 0 24 24"><!-- ... --></svg>
                    <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold">New project</h3>
                </div>
                <p class="text-slate-500 group-hover:text-white text-sm">Create a new project from a variety of starting templates.</p>
            </a>
        </div>

        <div>
            <fieldset>
                <legend>Published status</legend>

                <input id="draft" class="peer/draft" type="radio" name="status" checked />
                <label for="draft" class="peer-checked/draft:text-sky-500">Draft</label>

                <input id="published" class="peer/published" type="radio" name="status" />
                <label for="published" class="peer-checked/published:text-sky-500">Published</label>

                <div class="hidden peer-checked/draft:block">Drafts are only visible to administrators.</div>
                <div class="hidden peer-checked/published:block">Your post will be publicly visible on your site.</div>
            </fieldset>
        </div>
    </div>
</body>
</html>
