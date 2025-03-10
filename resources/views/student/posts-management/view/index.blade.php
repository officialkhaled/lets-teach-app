@extends('layout')
@section('title', 'Detail View | Posts')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Detail View
                    </h3>
                    <div>
                        <button type="button" class="btn btn-sm btn-primary" onclick="Codebase.helpers('cb-print');">
                            <i class="si si-printer opacity-75"></i>
                            {{--                            <i class="fa-solid fa-print opacity-75"></i>--}}
                        </button>
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        <a href="{{ currentUser()->roles?->first()->name == 'student' ? route('student.posts-management.index') : route('admin.content-moderation.posts.index') }}"
                           class="btn btn-info btn-sm waves-effect bg-gradient">
                            &nbsp;<i class="fa-regular fa-circle-left opacity-75"></i>&nbsp;&nbsp;Back&nbsp;
                        </a>
                    </div>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <div class="block-content">
                        <div class="table-responsive push">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr class="table-primary">
                                    <th class="text-center" style="width: 60px;"></th>
                                    <th>Product</th>
                                    <th class="text-center" style="width: 90px;">Qnt</th>
                                    <th class="text-end" style="width: 120px;">Unit</th>
                                    <th class="text-end" style="width: 120px;">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>
                                        <p class="fw-semibold mb-1">Logo Creation</p>
                                        <div class="text-muted">Logo and business cards design</div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge rounded-pill bg-primary">1</span>
                                    </td>
                                    <td class="text-end">$1.800,00</td>
                                    <td class="text-end">$1.800,00</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>
                                        <p class="fw-semibold mb-1">Online Store Design &amp; Development</p>
                                        <div class="text-muted">Design/Development for all popular modern browsers</div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge rounded-pill bg-primary">1</span>
                                    </td>
                                    <td class="text-end">$20.000,00</td>
                                    <td class="text-end">$20.000,00</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>
                                        <p class="fw-semibold mb-1">App Design</p>
                                        <div class="text-muted">Promotional mobile application</div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge rounded-pill bg-primary">1</span>
                                    </td>
                                    <td class="text-end">$3.200,00</td>
                                    <td class="text-end">$3.200,00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="fw-semibold text-end">Subtotal</td>
                                    <td class="text-end">$25.000,00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="fw-semibold text-end">Vat Rate</td>
                                    <td class="text-end">20%</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="fw-semibold text-end">Vat Due</td>
                                    <td class="text-end">$5.000,00</td>
                                </tr>
                                <tr class="table-warning">
                                    <td colspan="4" class="fw-bold text-uppercase text-end">Total Due</td>
                                    <td class="fw-bold text-end">$30.000,00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

@endsection
