<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
    return;
}

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>

    </div>
    <!-- } 콘텐츠 끝 -->

    <!-- 하단 시작 { -->

    <footer class="container">
        <div class="row">
            <div id="bottom_menu" class="col s12">
                <ul>
                    <li>
                        <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">이용약관</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a>
                    </li>
                    <li><a href="">오시는길</a></li>
                    <li><a href="">채용정보</a></li>
                    <li><a href="">제휴문의</a></li>
                    <li><a href="">고객센터</a></li>
                    <li><a href="">회원사 인트라넷</a></li>
                </ul>
            </div>
            <div class="col s12">
                <p>
                    <span>
                        <b>회사명</b>
                        <?php echo $default['de_admin_company_name']; ?>
                    </span>
                    <span>
                        <b>주소</b>
                        <?php echo $default['de_admin_company_addr']; ?>
                    </span>
                    <br>
                    <span>
                        <b>사업자 등록번호</b>
                        <?php echo $default['de_admin_company_saupja_no']; ?>
                    </span>
                    <span>
                        <b>대표</b>
                        <?php echo $default['de_admin_company_owner']; ?>
                    </span>
                    <span>
                        <b>전화</b>
                        <?php echo $default['de_admin_company_tel']; ?>
                    </span>
                    <span>
                        <b>팩스</b>
                        <?php echo $default['de_admin_company_fax']; ?>
                    </span>
                    <br>
                    <!-- <span><b>운영자</b> <?php echo $admin['mb_name']; ?></span><br> -->
                    <span>
                        <b>통신판매업신고번호</b>
                        <?php echo $default['de_admin_tongsin_no']; ?>
                    </span>
                    <span>
                        <b>개인정보 보호책임자</b>
                        <?php echo $default['de_admin_info_name']; ?>
                    </span>

                    <?php if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?>
                    <br> Copyright &copy; 2001-2013
                    <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

        <script src="<?php echo G5_JS_URL; ?>/sns.js"></script>
        <!-- } 하단 끝 -->

        <?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>