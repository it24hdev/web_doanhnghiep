<div id="footer">
    <div class="wp-footer">
        <div class="wp-body-footer">
            <div class="container-footer">
                <div class="first-footer-inner">
                    <div class="content-footer-inner">
                        <div class="wp-about">
                            <h3 class="title">Về Chúng Tôi</h3>
                            <div class="content-about">
                                <p>Với đội ngũ giảng viên có nhiều năm kinh nghiệp và các đối tác nước ngoài lâu năm, chúng tôi cam kết đem đến cho bạn
                                    những kiến thức cùng cơ hội việc làm lớn!
                                </p>
                            </div>
                            <ul class="social-icons">
                                <li><a href="" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank" ><i class="fab fa-youtube"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                        <div class="wp-services">
                            <h3 class="title">Dịch Vụ</h3>
                            <ul class="menu-footer">
                                @foreach($danhsachdichvu_footer as $dsdv)
                                <li><a href="{{route('detail-service',['slug' => $dsdv->slug])}}"><i class="fas fa-horizontal-rule me-2"></i>{{$dsdv->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="wp-post">
                            <h3 class="title">Tin Tức Mới</h3>
                            <ul>
                                @foreach ($list_post_sidebar as $item)
                                    <li>
                                        <a href="{{route('detail-post', $item->slug)}}">
                                            <div class="thumb-post">
                                                <img src="{{asset('upload/images/post/thumb/'.$item->thumb)}}" alt="">
                                            </div>
                                            <div class="info-post">
                                                <span class="time"><i class="fal fa-calendar-alt me-2"></i> {{\App\Helpers\CommonHelper::convertDateToDMY($item->created_at)}}</span>
                                                <h4 class="title">{{$item->title}}</h4>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="wp-userfull-links">
                            <h3 class="title">Liên hệ</h3>
                            <div class="image-media">
                                <img src="{{asset('asset/images/footer-map.png')}}" alt="">
                            </div>
                            <div class="address">
                                <i class="fas fa-map-marker-alt me-2"></i><span>Việt Nam: 0988 758 801</span>
                            </div>
                            <div class="address">
                                <i class="fas fa-map-marker-alt me-2"></i><span>Hải Phòng: 0326 384 981</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wp-contact-footer">
                <div class="container-footer">
                    <div class="padding-contact-footer">
                        <div class="contact-footer">
                            <div class="wp-mail">
                                <div class="content-contact">
                                    <div class="icon-contact">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="detail">
                                        <a href="mailto:email@gmail.com">email@gmail.com</a>
                                        <p>Địa chỉ nhận Email</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wp-hotline">
                                <div class="content-contact">
                                    <div class="icon-contact">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="detail">
                                        <a href="tel:+84988758801">0988 758 801</a>
                                        <p>Gọi cho chúng tôi!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wp-address">
                                <div class="content-contact">
                                    <div class="icon-contact">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="detail">
                                        <a>Đường 430 - Đại Lộc 5 - H.Kiến Thuỵ - TP.Hải Phòng</a>
                                        <p>Địa chỉ văn phòng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wp-bottom-footer">
                <div class="menu-bottom-footer">
                    <a href="{{route('home')}}">Trang Chủ</a> |
                    <a href="{{route('list-service')}}">Dịch Vụ</a> |
                    <a href="{{route('contact')}}">Liên Hệ</a>
                </div>
                <p>Copyright © 2022 it24h. Thiết kế bởi it24h.vn</p>
            </div>
        </div>
    </div>
</div>
