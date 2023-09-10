<x-layouts.admin.app>

    <x-slot:title>Create user</x-slot:title>

    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
          <form
            class="py-6 px-9"
            action="{{ route('users.store') }}"
            method="POST"
          >@csrf
            <div class="mb-5">
              <label
                for="name"
                class="mb-3 block text-base font-medium text-indigo-500">Name</label>
              <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="Name"
                class="w-full rounded-md border border-[#e0e0e0] bg-black py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required/>
            </div>
            <div class="mb-5">
                <label
                  for="name"
                  class="mb-3 block text-base font-medium text-indigo-500">Email</label>
                <input
                  type="email"
                  name="email"
                  value="{{ old('email') }}"
                  placeholder="Email"
                  class="w-full rounded-md border border-[#e0e0e0] bg-black py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required/>
              </div>
            <div>
                <div class="mb-5">
                    <label
                      for="name"
                      class="mb-3 block text-base font-medium text-indigo-500">Password</label>
                    <input
                      type="password"
                      name="password"
                      placeholder="Password"
                      class="w-full rounded-md border border-[#e0e0e0] bg-black py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required/>
                  </div>
                <div>
                    <div class="mb-5">
                        <label
                          for="name"
                          class="mb-3 block text-base font-medium text-indigo-500">Role</label>
                          <select name="role_id" class="w-full rounded-md border border-[#e0e0e0] bg-black py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                          </select>                
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