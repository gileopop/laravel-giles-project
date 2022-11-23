@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="mb-6 text-gray-600 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">
                        Wrestlers
                    </h1>
                    <div class="text-center">
                        <p>
                            A rather simple example of using an interface.
                        </p>
                        <p>
                            When you click on either the Kenny Omega or PAC link, the relevant controller implements WrestlersControllerInterface.php. 
                        </p>
                        <p>
                            A single method called info() is defined in the interface, and each controller then carries out the tasks of the info() method. 
                        </p>
                    </div>
                    <div class="text-center p-6">
                        <a href="/wrestlers/kenny" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Kenny Omega">
                            Kenny Omega
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/wrestlers/pac" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="PAC">
                            PAC
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

@endsection