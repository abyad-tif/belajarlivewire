<div>
    <div class="py-2">
    <div class="mx-auto">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Create New User</h2>
    </div>

    @if (session('success'))    
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
        </div>
    @endif

    <div class="mt-10">
        <form wire:submit.prevent="createUser" action="#" method="POST" class="space-y-6">
            <div>
                <label for="name" class="block text-sm/6 font-medium text-gray-100">Name</label>
                <div class="mt-2">
                <input wire:model="name" id="name" type="name" name="name" autocomplete="name" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                @error('name') 
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
                    
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-100">Email address</label>
                <div class="mt-2">
                <input wire:model="email" id="email" type="email" name="email" autocomplete="email" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                @error('email') 
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-100">Password</label>
                </div>
                <div class="mt-2">
                <input wire:model="password" id="password" type="password" name="password" autocomplete="current-password" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                @error('password') 
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
                </div>
            </div>

            <div class="col-span-full">
                <label for="profile-picture" class="block text-sm/6 font-medium text-white">Profile Picture</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-white/25 px-6 py-10">
                    <div class="text-center">
                    <svg viewBox="0 0 24 24" fill="currentColor" data-slot="icon" aria-hidden="true" class="mx-auto size-12 text-gray-600">
                        <path d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                    <div class="mt-4 flex text-sm/6 text-gray-400">
                        <label for="avatar" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-400 focus-within:outline-2 focus-within:outline-offset-2 focus-within:outline-indigo-500 hover:text-indigo-300">
                        <span>Upload a file</span>
                        <input wire:model="avatar" id="avatar" type="file" name="avatar" class="sr-only" />
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs/5 text-gray-400">PNG, JPG up to 5MB</p>
                    </div>
                </div>
                @error('avatar') 
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Create new user</button>
            </div>
        </form>
    </div>
    </div>


    <hr>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
