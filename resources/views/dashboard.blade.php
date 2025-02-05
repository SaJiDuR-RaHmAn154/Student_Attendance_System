<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg font-semibold">{{ __("You're logged in!") }}</p>
                    
                    <!-- User Information -->
                    <div class="mt-4">
                        <p class="text-gray-600">Welcome, <span class="font-semibold">{{ Auth::user()->name }}</span>!</p>
                        <p class="text-gray-600">Your Email: <span class="font-semibold">{{ Auth::user()->email }}</span></p>
                    </div>

                    <!-- Quick Links -->
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold">Quick Actions:</h3>
                        <div class="flex space-x-4 mt-2">
                            <a href="{{ route('students.index') }}" class="bg-blue-500 px-4 py-2 text-white rounded-md hover:bg-blue-600 transition">
                                Manage Students
                            </a>
                            <a href="{{ route('attendance.index') }}" class="bg-green-500 px-4 py-2 text-white rounded-md hover:bg-green-600 transition">
                                Take Attendance
                            </a>
                            <a href="{{ route('attendance.report') }}" class="bg-purple-500 px-4 py-2 text-white rounded-md hover:bg-purple-600 transition">
                                View Reports
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
