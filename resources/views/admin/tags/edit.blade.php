<x-layouts.admin.app>

    <x-slot:title>Edit / {{ $tag->name }}</x-slot:title>

    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
          <form
            class="py-6 px-9"
            action="{{ route('tags.update', $tag->id) }}"
            method="POST"
          >@csrf @method('PUT')
            <div class="mb-5">
              <label
                for="name"
                class="mb-3 block text-base font-medium text-indigo-500"
              >
                Tag name
              </label>
              <input
                type="text"
                name="name"
                value="{{ $tag->name }}"
                placeholder="Tag name"
                class="w-full rounded-md border border-[#e0e0e0] bg-black py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required
              />
            </div>
            <div>
              <button type="submit"
                class="hover:shadow-form w-50 rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                Save
              </button>
            </div>
          </form>
        </div>
      </div>

</x-layouts.admin.app>