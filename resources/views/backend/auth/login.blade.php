 @extends('frontend.layouts.app')

 @section('title', "login page")

@section('content')
 	<div class="box-border grid min-h-screen w-full place-items-center bg-[#f4f6fb] p-6 font-sans text-[#1d2939]">
 		<div class="w-full max-w-[420px] rounded-[14px] border border-[#e6eaf0] bg-white p-[30px_24px] shadow-[0_16px_45px_rgba(28,42,70,0.08)] min-[481px]:p-[38px]">
 			<p class="mb-6 text-sm font-[750] uppercase tracking-[0.08em] text-[#315eea]">Administration</p>
 			<h1 class="text-[28px] tracking-[-0.5px]">Welcome back</h1>
 			<p class="mb-[26px] mt-2 text-sm leading-[1.5] text-[#667085]">Sign in to your account to continue.</p>

 			@if ($errors->any())
 				<div class="mb-[18px] rounded-[7px] bg-[#fff1f0] px-[13px] py-[11px] text-[13px] text-[#b42318]" role="alert">
 					@foreach ($errors->all() as $error)
 						<div>{{ $error }}</div>
 					@endforeach
 				</div>
 			@endif

 			<form method="POST" action="{{ route('login') }}">
 				@csrf
 				<div class="mb-[18px]">
 					<label class="mb-[7px] block text-[13px] font-semibold text-[#344054]" for="email">Email address</label>
 					<input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="h-[45px] w-full rounded-[7px] border border-[#d0d5dd] bg-white px-3 text-sm text-[#1d2939] focus:border-[#5278f2] focus:outline-[3px] focus:outline-[rgba(49,94,234,0.13)] @error('email') border-[#d92d20] @enderror">
 					@error('email') <p class="mb-0 mt-[6px] text-xs text-[#b42318]">{{ $message }}</p> @enderror
 				</div>
 				<div class="mb-[18px]">
 					<label class="mb-[7px] block text-[13px] font-semibold text-[#344054]" for="password">Password</label>
 					<input id="password" type="password" name="password" required autocomplete="current-password" class="h-[45px] w-full rounded-[7px] border border-[#d0d5dd] bg-white px-3 text-sm text-[#1d2939] focus:border-[#5278f2] focus:outline-[3px] focus:outline-[rgba(49,94,234,0.13)] @error('password') border-[#d92d20] @enderror">
 					@error('password') <p class="mb-0 mt-[6px] text-xs text-[#b42318]">{{ $message }}</p> @enderror
 				</div>
 				<label class="mb-[22px] mt-[3px] flex items-center gap-2 text-[13px] text-[#475467]" for="remember">
 					<input id="remember" type="checkbox" name="remember" value="1" class="m-0 accent-[#315eea]" {{ old('remember') ? 'checked' : '' }}>
 					Remember me
 				</label>
 				<button type="submit" class="h-[46px] w-full cursor-pointer rounded-[7px] border-0 bg-[#315eea] text-sm font-[650] text-white hover:bg-[#254ed0]">Sign in</button>
 			</form>
 		</div>
	</div>
@endsection

