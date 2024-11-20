@extends('admin.layout')
@section('content')
	
	<main id="main-container">
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<section class="block block-rounded block-bordered block-link-shadow" style="padding: 30px;">
						<header class="d-flex justify-content-between">
							<div class="">
								<h3 class="text-lg font-medium text-gray-900">
									Profile Information
								</h3>
								<p class="mt-1 text-sm text-gray-600">
									Update your account's profile information and email address.
								</p>
							</div>
							<div class="">
								<a href="{{  url()->previous() }}" class="btn btn-info btn-sm">
									&nbsp;<i class="fa-regular fa-circle-left"></i>&nbsp;&nbsp;Back&nbsp;
								</a>
							</div>
						</header>
						
						<form id="send-verification" method="post" action="{{ route('verification.send') }}">
							@csrf
						</form>
						
						<div class="row">
							<form method="post" action="{{ route('profile.update') }}" class="space-y-3">
								@csrf
								@method('patch')
								
								<div class="col-md-4">
									<label for="name">Name</label>
									<input id="name" name="name" type="text" class="form-input" required autofocus autocomplete="name"/>
								</div>
								
								<div class="col-md-4">
									<label for="email">Email</label>
									<input id="email" name="email" type="email" class="form-input" required autocomplete="username"/>
									
									@if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
										<div>
											<p class="text-sm mt-2 text-gray-800">
												{{ __('Your email address is unverified.') }}
												
												<button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
													{{ __('Click here to re-send the verification email.') }}
												</button>
											</p>
											
											@if (session('status') === 'verification-link-sent')
												<p class="mt-2 font-medium text-sm text-green-600">
													{{ __('A new verification link has been sent to your email address.') }}
												</p>
											@endif
										</div>
									@endif
								</div>
								
								<div class="col-md-4">
									<label for="image">Image</label>
									<input type="file" class="">
								</div>
								
								<div class="d-flex justify-content-center gap-2">
									<button class="btn btn-success btn-sm" type="submit">
										&nbsp;<i class="fa fa-save"></i>&nbsp;&nbsp;Update&nbsp;
									</button>
									
									<button class="btn btn-warning btn-sm" type="button">
										&nbsp;<i class="fa fa-refresh"></i>&nbsp;&nbsp;Refresh&nbsp;
									</button>
									
									@if (session('status') === 'profile-updated')
										<p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
										   class="text-sm text-gray-600">
											Saved!
										</p>
									@endif
								</div>
							</form>
						</div>
					
					</section>
				</div>
				
				
				{{--				<div class="py-12">--}}
				{{--					<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">--}}
				{{--						<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
				{{--							<div class="max-w-xl">--}}
				{{--								@include('profile.partials.update-profile-information-form')--}}
				{{--							</div>--}}
				{{--						</div>--}}
				{{--						--}}
				{{--						<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
				{{--							<div class="max-w-xl">--}}
				{{--								@include('profile.partials.update-password-form')--}}
				{{--							</div>--}}
				{{--						</div>--}}
				{{--						--}}
				{{--						<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
				{{--							<div class="max-w-xl">--}}
				{{--								@include('profile.partials.delete-user-form')--}}
				{{--							</div>--}}
				{{--						</div>--}}
				{{--					</div>--}}
				{{--				</div>--}}
			
			</div>
		</div>
	</main>

@endsection