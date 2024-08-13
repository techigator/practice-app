@extends('front.layout.app')
@section('content')
    <!-- Pricing Area -->
    <div class="rn-pricing-area rn-section-gap section-separator" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-5 mb_md--40 mb_sm--40 small-margin-pricing">
                    <div
                        class="d-block d-lg-flex text-center d-lg-left section-flex flex-wrap align-content-start h-100">
                        <div class="position-sticky sticky-top rbt-sticky-top-adjust">
                            <div class="section-title text-left">
                                <span class="subtitle text-center text-lg-left">Pricing</span>
                                <h2 class="title text-center text-lg-left">My Pricing</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-7">
                    <!-- Pricing Area -->
                    <div class="navigation-wrapper">
                        <ul class="nav " id="myTab" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-style" id="test-tab" data-bs-toggle="tab" href="#test" role="tab"
                                   aria-controls="test" aria-selected="false">Static</a>
                            </li>

                            <li class="nav-item  recommended">
                                <a class="nav-style active" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                   role="tab" aria-controls="profile" aria-selected="true">Standard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-style" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                   aria-controls="contact" aria-selected="false">Premium</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade " id="test" role="tabpanel" aria-labelledby="test-tab">
                                <!-- Pricing Start -->
                                <div class="rn-pricing">
                                    <div class="pricing-header">
                                        <div class="header-left">
                                            <h2 class="title">Make Your Single Page</h2>
                                            <span>Elementor</span>
                                        </div>
                                        <div class="header-right">
                                            <span>$30.00</span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <p class="description">
                                            All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                            chunks as necessary
                                        </p>
                                        <div class="check-wrapper">
                                            <div class="left-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>1 Page with Elementor</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design Customization</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Responsive Design</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Content Upload</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design Customization</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>2 Plugins/Extensions</p>
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>multipage Elementor</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design Figma</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>MAintaine Design</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Content Upload</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design With XD</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>8 Plugins/Extensions</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="#" class="rn-btn d-block">
                                            <span>ORDER NOW</span>
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                        <div class="time-line">
                                            <div class="single-cmt d-flex">
                                                <i data-feather="clock"></i>
                                                <span>2 Days Delivery</span>
                                            </div>
                                            <div class="single-cmt d-flex">
                                                <i data-feather="activity"></i>
                                                <span>Unlimited Revission</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>

                            <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                 aria-labelledby="profile-tab">
                                <!-- Pricing Start -->
                                <div class="rn-pricing">
                                    <div class="pricing-header">
                                        <div class="header-left">
                                            <h2 class="title">Design Make this Page</h2>
                                            <span>Elementor</span>
                                        </div>
                                        <div class="header-right">
                                            <span>$50.00</span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <p class="description">
                                            Making this the first true generator on the Internet. It uses a
                                            dictionary & plugin Development.
                                        </p>
                                        <div class="check-wrapper">
                                            <div class="left-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>1 Page with Elementor</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design Customization</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Responsive Design</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Content Upload</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design Customization</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>2 Plugins/Extensions</p>
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>multipage Elementor</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design Figma</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>MAintaine Design</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Content Upload</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design With XD</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>8 Plugins/Extensions</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="#" class="rn-btn d-block">
                                            <span>ORDER NOW</span>
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                        <div class="time-line d-flex">
                                            <div class="single-cmt d-flex">
                                                <i data-feather="clock"></i>
                                                <span>2 Days Delivery</span>
                                            </div>
                                            <div class="single-cmt d-flex">
                                                <i data-feather="activity"></i>
                                                <span>Unlimited Revission</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <!-- Pricing Start -->
                                <div class="rn-pricing">
                                    <div class="pricing-header">
                                        <div class="header-left">
                                            <h2 class="title">Customize Your Single Page</h2>
                                            <span>Elementor</span>
                                        </div>
                                        <div class="header-right">
                                            <span>$90.00</span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <p class="description">
                                            I will install your desire theme and made like Theme demo and customize
                                            your single page( homepage)
                                        </p>
                                        <div class="check-wrapper">
                                            <div class="left-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>1 Page with Elementor</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design Customization</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Responsive Design</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Content Upload</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design Customization</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>2 Plugins/Extensions</p>
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>multipage Elementor</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design Figma</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>MAintaine Design</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Content Upload</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design With XD</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>8 Plugins/Extensions</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="#" class="rn-btn d-block">
                                            <span>ORDER NOW</span>
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                        <div class="time-line d-flex">
                                            <div class="single-cmt d-flex">
                                                <i data-feather="clock"></i>
                                                <span>2 Days Delivery</span>
                                            </div>
                                            <div class="single-cmt d-flex">
                                                <i data-feather="activity"></i>
                                                <span>Unlimited Revission</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
    <!-- pricing area -->
@endsection
