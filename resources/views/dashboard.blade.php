<x-app-layout>
<div class="container content">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="heading">Welcome, {{ auth()->user()->name }}!</h1>
                <p>You are accessible to several users
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
