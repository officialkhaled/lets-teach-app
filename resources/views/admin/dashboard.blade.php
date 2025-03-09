@extends('layout')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="row">
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded shadow-none bg-primary" href="javascript:void(0)">
                        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                            <div class="d-none d-sm-block">
                                <i class="fa-solid fa-person-chalkboard fa-2x text-black-50"></i>
                            </div>
                            <div class="text-end">
                                <div class="fs-3 fw-semibold text-white">{{ $tutors->count() }}</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Tutors</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-xl-3">
                    <a class="block block-rounded shadow-none bg-earth" href="javascript:void(0)">
                        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                            <div class="d-none d-sm-block">
                                <i class="fa-solid fa-graduation-cap fa-2x text-black-50"></i>
                            </div>
                            <div class="text-end">
                                <div class="fs-3 fw-semibold text-white">{{ $students->count() }}</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Students</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-xl-3">
                    <a class="block block-rounded shadow-none bg-warning" href="javascript:void(0)">
                        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                            <div class="d-none d-sm-block">
                                <i class="fa-solid fa-tags fa-2x text-black-50"></i>
                            </div>
                            <div class="text-end">
                                <div class="fs-3 fw-semibold text-white">{{ '' }}</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Tags</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-xl-3">
                    <a class="block block-rounded shadow-none bg-info" href="javascript:void(0)">
                        <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
                            <div class="d-none d-sm-block">
                                <i class="fa-solid fa-envelopes-bulk fa-2x text-black-50"></i>
                            </div>
                            <div class="text-end">
                                <div class="fs-3 fw-semibold text-white">{{ $posts->count() }}</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Posts</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="block block-rounded d-flex justify-content-center" id="dynamic-background"
                         style="height: 600px; align-items: center; background-color: #a29bfe;">
                        <spline-viewer url="https://prod.spline.design/A6toyZNZEzCYDqNN/scene.splinecode" style="border-radius: 18px;"></spline-viewer>
                    </div>
                </div>
            </div>
        </div>


    </main>

@endsection

@section('script')
    <script>
        VANTA.FOG({
            el: "#dynamic-background",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            highlightColor: 0xff7b00,
            midtoneColor: 0xceff,
            lowlightColor: 0xff00bf,
            blurFactor: 0.5
        })
        // VANTA.CLOUDS({
        //     el: "#content",
        //     mouseControls: false,
        //     touchControls: true,
        //     gyroControls: false,
        //     minHeight: 200.00,
        //     minWidth: 200.00,
        //     speed: 0.75,
        // })
        // VANTA.GLOBE({
        //     el: "#dynamic-background",
        //     mouseControls: true,
        //     touchControls: true,
        //     gyroControls: false,
        //     minHeight: 200.00,
        //     minWidth: 200.00,
        //     scale: 1.00,
        //     scaleMobile: 1.00
        // })
    </script>

@endsection
