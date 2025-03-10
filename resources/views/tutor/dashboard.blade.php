@extends('layout')
@section('title', 'Dashboard')
@section('content')
    <main id="main-container">
        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="block block-themed block-rounded">
                        <div class="block-header bg-elegance">
                            <h3 class="block-title">
                                {{ Carbon\Carbon::greetings() }}, <span class="fw-bold">{{ userName() }}</span>
                            </h3>
                            <div class="block-options">
                                <a href="{{ route('tutor.profile.edit', $tutor->id) }}" class="btn-block-option"
                                   data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile">
                                    <i class="fa fa-edit opacity-75"></i>
                                </a>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="m-b-1">
                                        Email: <span class="fw-bold">{{ currentUser()->email }}</span>
                                        <br>
                                        Phone: <span class="fw-bold">{{ $tutor->phone_number }}</span>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Quote of the Day">
                                        <p class="mb-0">
                                            {{ randomQuote() }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="block block-themed block-rounded">
                        <div class="block-header bg-corporate">
                            <h3 class="block-title">Available Jobs In Your Area</h3>
                            <div class="block-options">
                                <a href="{{ route('tutor.job-posts.index') }}" class="btn-block-option"
                                   data-bs-toggle="tooltip" data-bs-placement="top" title="View Available Jobs">
                                    <i class="fa-solid fa-clipboard-list opacity-75"></i>
                                </a>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center" style="align-items: center; margin-top: -1.625rem;">
                                    <i class="fa-brands fa-algolia text-corporate" style="font-size: 4rem;"></i>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="margin-bottom: 0;">
                                                <span class="fw-bold" style="font-size: 24px;">Available Jobs: <span>{{ '5' }}</span></span>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row m-t-2">
                                        <div class="col-md-12">
                                            <p>
                                                <span style="font-size: 14px;" class="opacity-75">Your Tuition Area -</span>
                                                <br>
                                                <span class="fw-bold" style="font-size: 14px;">{{ 'Uttara Sector 11, Uttara Sector 4' }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded shadow-none bg-primary" href="javascript:void(0)">
                        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                            <div class="d-none d-sm-block">
                                <i class="fa-brands fa-magento fa-2x text-black-50"></i>
                            </div>
                            <div class="text-end">
                                <div class="fs-3 fw-semibold text-white">{{ $appliedJobs }}</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Applied Jobs</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-xl-3">
                    <a class="block block-rounded shadow-none bg-earth" href="javascript:void(0)">
                        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                            <div class="d-none d-sm-block">
                                <i class="fa-solid fa-list-check fa-2x text-black-50"></i>
                            </div>
                            <div class="text-end">
                                <div class="fs-3 fw-semibold text-white">{{ $assignedJobs }}</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Assigned Jobs</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-xl-3">
                    <a class="block block-rounded shadow-none bg-info" href="javascript:void(0)">
                        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                            <div class="d-none d-sm-block">
                                <i class="fa-solid fa-circle-check fa-2x text-black-50"></i>
                            </div>
                            <div class="text-end">
                                <div class="fs-3 fw-semibold text-white">{{ $confirmedJobs }}</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Confirmed Jobs</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-xl-3">
                    <a class="block block-rounded shadow-none bg-gray-dark" href="javascript:void(0)">
                        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                            <div class="d-none d-sm-block">
                                <i class="fa-solid fa-ban fa-2x text-black-50"></i>
                            </div>
                            <div class="text-end">
                                <div class="fs-3 fw-semibold text-white">{{ $cancelledJobs }}</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Cancelled Jobs</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="block block-rounded d-flex justify-content-center" id="dynamic-background"
                         style="height: 600px; align-items: center; background-color: #636e72">
                        <div class="block-content block-content-full d-sm-flex justify-content-center">
                            {{--							<h1 class="block-title text-uppercase"--}}
                            {{--								style="font-size: 28px; flex: none; cursor: pointer; box-shadow: rgba(0, 0, 0, 0.5) 0 10px 30px 0;--}}
                            {{--									background-color: #19634e; border-radius: 8px; padding: 10px 20px; color: #b5e5cf">--}}
                            {{--								Hello,--}}
                            {{--								<span class="fw-bold" style="color: #fff;">{{ currentUser()->name }}</span>!--}}
                            {{--								<br>--}}
                            {{--								Welcome to your--}}
                            {{--								<span class="fw-bold" style="color: #fff;">Tutor</span> Dashboard!--}}
                            {{--							</h1>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')

    <script>
        VANTA.NET({
            el: "#dynamic-background",
            mouseControls: false,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x3fff6f,
            backgroundColor: 0x153b3c,
            points: 12.00,
            maxDistance: 23.00
        })
    </script>

@endsection
