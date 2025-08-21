<?php

function generate_box($icon, $title, $desc, $players, $rating, $version, $signal) {
    $html = '<div class="box flex">
                <div class="content flex">
                    <div class="about flex">
                        <img src="' . $icon . '"
                            alt="server logo" class="s-logo">
                        <div class="txt">
                            <h1>' . $title . '</h1>
                            <h3>' . $desc . '</h3>
                        </div>
                        <button class="copy" id="copy-mobile">
                            <i class="fa-solid fa-copy"></i>
                            <span>Copy</span>
                        </button>
                    </div>
                    <div class="other flex">
                        <div class="status flex">
                            <div class="players">
                                <i class="fa-solid fa-user"></i>
                                <span>' . $players . '</span>
                            </div>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <span>' . $rating . '</span>
                            </div>
                            <div class="version">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>' . $version . '</span>
                            </div>
                            <div class="signal">
                                <i class="fa-solid fa-signal"></i>
                            </div>
                        </div>
                        <button class="copy" id="copy">
                            <i class="fa-solid fa-copy"></i>
                            <span>Copy</span>
                        </button>
                    </div>
                </div>
            </div>';
    echo $html;
}

?>