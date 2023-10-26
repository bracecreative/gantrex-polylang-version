<?php if (get_row_layout() == 'sts_crane') {
    $wheels = get_sub_field('sts_crane_wheels');
    $drums = get_sub_field('sts_drums');
    $sheaves = get_sub_field('sts_sheaves');
    $rollers = get_sub_field('sts_rollers');
    $twistLocks = get_sub_field('sts_twist_locks');
    $endStopsBuffers = get_sub_field('sts_end_stops_buffers');
    $headblock = get_sub_field('sts_headblock');
?>

    <section class="w-full py-8 bg-white max-w-[95vw] mx-auto mb-8 md:px-6 2xl:px-0">

        <div class="my-10 xl:my-0 xl:hidden text-center">
            <span class="text-sm">
                Click a number to learn more about our crane parts
            </span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12" x-data="{ cranePart: 1 }">
            <div class="md:min-h-[60vh] lg:flex lg:items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 660.45 598.33">
                    <g id="crane">
                        <polyline points="284.18 283.38 280.18 357.38 283.68 433.88 440.68 502.88 442.68 420.88 461.68 229.88 461.68 202.52 289.68 158.88 290.18 184.38 288.56 212.52" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                        <polyline points="298.18 277.38 293.18 360.19 294.18 423.19 425.18 481.19 427.18 414.19 445.18 223.19 445.18 211.64 304.18 175.19 304.18 186.03 303.18 208.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="425.42 473.41 302.18 420.38 302.18 410.69 306.18 388.38 376.18 351.38 378.18 357.38 378.18 381.38 428.46 400.68" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="437.18 139.38 473.18 147.38 417.18 54.38 418.34 59.31 437.18 139.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="420.18 136.38 385.18 128.38 379.18 130.38 379.18 138.38 318.18 157.38 350.18 34.38 353.18 34.38 420.18 136.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="459.67 412.39 451.18 409.38 451.18 418.24 459.67 412.39" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="401.18 19.38 425.18 23.38 425.18 26.38 420.18 27.38 420.18 39.05 486.18 150.38 552.18 165.38 551.99 168.9 537.18 434.38 531.18 438.38 490.3 423.5 453.18 447.76 448.41 471.76 447.18 498.38 440.68 502.88 457.16 511.38 463.18 507.38 447.18 498.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="367.18" y1="15.38" x2="388.18" y2="18.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="289.68 158.88 298.18 155.38 307.18 157.38 340.18 32.38 337.89 32.01 333.88 31.38 334.18 19.38 325.18 18.38 346.18 12.38 354.18 13.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="367.18 36.38 424.18 127.38 403.18 41.38 367.18 36.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="301.18 364.38 378.18 326.38 378.18 318.76 341.18 259.38 306.18 274.38 301.18 358.8 301.18 364.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="350.18 256.38 378.18 302.14 378.18 244.69 350.18 256.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m397.18,368.38l33.14,12.54-33.14-12.54Z" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="397.18 236.38 397.18 246.13 397.18 250.76 397.18 368.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="468.18 238.38 521.18 346.38 529.18 188.38 529.18 183.1 470.18 207.38 469.18 223.38 468.18 238.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="453.18 389.38 480.18 399.38 519.18 375.38 519.18 364.38 466.18 257.38 453.18 389.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="434.18" y1="221.38" x2="445.18" y2="216.99" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="330.18 163.38 378.18 147.38 378.18 175.19 330.68 163.74 330.18 163.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="399.18 149.38 399.18 173.35 432.17 161.28 431.43 157.38 399.18 149.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="443.25 158.88 519.18 176.61 468.89 197.19 468.18 197.48 451.18 193.38 437.18 139.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="378.18 175.19 420.93 186.05 439.68 190.81 424.18 127.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m473.18,147.38l10,18s7.1-1,6.55-8l-3.55-7" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="420.18" y1="136.38" x2="430.18" y2="152.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="434.18 221.38 63.18 374.38 2.18 344.38 .41 328.38 15.18 323.38 158.18 258.38 341.18 194.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="367.18 191.48 166.89 262.98 20.03 330.88 30.64 335.65 61.18 349.38 212.18 277.38 393.62 207.73 396.4 206.74" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="395.68" y1="179.64" x2="433.47" y2="165.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="399.18" y1="173.35" x2="388.06" y2="177.7" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="498.68" y1="172.51" x2="451.18" y2="193.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="486.18" y1="168.9" x2="448.52" y2="183.1" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="41.18" y1="340.38" x2="397.09" y2="203.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="511.18 410.38 517.18 406.38 517.18 413.38 511.18 410.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="552.18 176 591.6 159.09 586.6 157.38 608.45 147.38 608.18 137.38 575.18 131.38 577.18 108.38 464.18 88.81 450.33 89.9" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="439.68" y1="91.74" x2="426.32" y2="93.2" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="419.78" y1="109.35" x2="419.78" y2="120.35" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="608.18 137.38 601.18 141.38 575.18 145.38 575.18 131.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="443.62" y1="98.27" x2="426.83" y2="95.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="537.85" y1="114.85" x2="536.05" y2="161.28" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="403.18 41.38 414.18 43.37 420.93 40.32" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="334.18 19.38 414.18 28.37 414.18 43.37 418.54 60.15" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="310.79" y1="205" x2="311.8" y2="177.16" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m390.59,330.88l1.08-91.97-1.08,91.97Z" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="390.59 330.88 301.18 375.95 301.18 364.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="517.18 411.88 517.18 419.93 504.04 414.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="453.18 389.38 453.18 396.38 473.18 403.38 459.67 412.39" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="429.74 387.05 391.13 372.57 390.59 362.18 386.34 346.38 376.18 351.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="453.18 396.38 451.18 409.38 451.18 418.24 449.18 436.38 534.15 380.92 519.18 375.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m391.68,147.38v28.91-28.91Z" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="392.18" y1="147.38" x2="399.18" y2="149.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="531.18 438.38 532.1 414.38 529.18 398.29 490.3 423.5" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="411.18 490.38 411.18 494.38 430.18 513.38 435.18 516.38 457.16 516.05 457.16 511.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m428.18,511.38c-.58-.39-3.65,1.03-6,0-1.59-.7-4.94-2.14-7-3-10.7-4.47-23-12-23-12l19-2" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="283.68 433.88 270.18 427.38 276.93 423.81 283.36 426.9" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="313.65 447.05 313.65 450.15 310.18 451.38 302.18 449.21 288.18 450.38 270.18 432.38 270.18 427.88" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="271.18 432.35 264.18 437.38 264.18 438.71 264.18 442.38 274.97 445.38 288.18 450.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="503.18 429.38 548.18 445.38 548.18 451.78 527.86 451.78 518.18 448.38 503.18 429.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="537.18 434.38 552.18 441.79 548.18 445.38 548.18 451.78 552.18 449.38 552.18 441.88" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="548.18 451.38 560.18 458.38 560.18 464.95 557.18 466.38 553.18 465.38 553.18 462.38 540.18 457.38 540.18 458.88 536.18 457.38 533.18 454.38 533.68 451.78" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="503.18 429.38 502.18 434.38 495.18 435.38 495.18 440.16 497.9 443.08 499.99 443.08 501.18 441.38 513.18 446.38 514.18 448.38 516.18 449.38 518.18 450.38 519.42 448.81" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="457.18 511.38 457.18 516.38 472.18 524.38 472.18 532.01 468.18 534.38 466.61 529.83 450.18 524.38 446.18 524.38 446.18 524.38 441.18 522.38 435.18 516.38 444.41 516.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="472.18 532.01 476.18 529.03 476.18 520.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="378.18 381.38 365.32 375.95 370.93 372.57 378.18 375.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="408.31 392.94 408.93 395.93 415.18 402.38 415.18 409.38 412.67 409.38 408.93 408.6 408.31 405.88 397.18 402.2 395.18 403.38 391.68 401.79 391.68 398.25 395.18 396.38 397.18 395.25 399.18 394.38 385.18 396.38 382.18 396.38 376.18 394.38 365.18 389.38 365.18 391.38 359.18 389.38 358.73 387.05 358.73 383.54 365.18 381.38 365.32 375.95" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="365.32" y1="378.9" x2="382.18" y2="396.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points=".41 328.38 61.18 357.38 219.18 282.38 418.18 204.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="393.29" y1="197.77" x2="28.01" y2="333.9" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                        <line x1="437.18" y1="181.38" x2="422.18" y2="186.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="476.18" y1="166.38" x2="447.12" y2="177.7" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="488.39 154.72 545.18 167.38 545.18 193.38 534.15 380.92" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="438.26" y1="143.54" x2="475.69" y2="151.89" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="379.18" y1="130.38" x2="422.4" y2="140.01" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="480.18" y1="399.38" x2="473.18" y2="403.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                        <path d="m521.18,346.38s7.27,16,10.13,22c1.87,3,1.87,10-5.07,8.08l-7.07-12.08" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                        <path d="m519.18,176.61l16.87-6.53s7.92.95,4.53,7.62l-11.4,5.4" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                        <path d="m379.18,138.38l6-2s5.75,2,2.88,8l-9.88,3" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m378.18,302.14l10,17.24s2,8-4,8l-6-8.62" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                        <path d="m307.18,157.38s-1,5,3.28,5c0,0,6.72,2,7.72-5" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m439.68,190.81s2.54,5.56,5.5,5.56,7-1,6-4" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="575.18 145.38 575.18 155.38 586.6 157.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="470.18" y1="207.38" x2="468.18" y2="197.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="551.99 168.9 574.36 159.09 577.18 108.38 537.85 114.85 456.84 100.88" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="370.34" y1="36.81" x2="337.89" y2="32.01" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="468.18" y1="236.28" x2="465.91" y2="260.12" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="317.43" y1="159.88" x2="334" y2="164.54" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="463.18 507.38 463.18 512.53 457.16 516.05" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="463.18 512.53 476.18 520.38 472.18 524.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="321.18 463.68 324.54 461.33 324.18 455.38 316.63 449.57 313.65 450.15 321.18 456.38 321.18 463.68 315.14 461.33 297.18 454.38 297.18 450.38 303.49 449.57" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="316.66" y1="448.37" x2="316.63" y2="449.57" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="321.18" y1="456.38" x2="324.18" y2="455.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="415.18 409.38 418.18 407.58 418.18 401.72 415.18 402.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="408.93 395.93 411.18 395.38 411.01 393.97" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="418.18" y1="401.72" x2="411.18" y2="395.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="560.18 464.95 563.28 463.09 563.28 456.96 552.18 449.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="563.28" y1="456.96" x2="560.18" y2="458.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="353.07" y1="190.81" x2="358.48" y2="189.23" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <g id="detail_lines" data-name="detail lines">
                            <polyline points="2.18 344.38 14.82 335.25 15.45 350.9 31.21 343.07 31.21 358.65 47.88 351.03 48.68 367.24 61.81 357.38 63.18 374.38 78.18 349.38 78.18 368.19 220.95 281.68 222.37 308.73 296.98 251.88 296.98 277.96 364.18 225.54 364.18 250.24 419.5 205" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="423.65 206.08 423.18 225.38 440.46 210.42" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="27.49 334.23 158.11 275.85 159.18 275.38 169.26 262.14 169.26 280.88 159.18 275.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="169.26 280.88 237.8 246.08 239.18 245.38 244.28 235.35 244.18 253.38 239.18 245.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polygon points="425.18 495.38 441.04 488.16 425.18 481.19 425.18 495.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="425.38 474.76 398.16 469.23 405.15 464.69 358.32 451.59 364.77 447.31 319.91 434.58 326.96 431.04 294.18 423.54 294.18 438.38 319.91 434.58 319.91 449.8 358.32 451.59 358.32 466.86 398.16 469.23 398.16 484.19 425.18 481.19 441.04 476.66 425.52 469.95 441.87 454.38 426.13 449.57 442.23 439.38 427.18 433.38 442.68 420.88 427.15 415.46 461.68 228.56 444.98 225.38 461.68 216.99 445.18 213.31 460.57 202.24 445.18 198.38 445.18 212.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="302.94 420.7 294.18 423.54 302.18 410.69 294.18 413.82 306.18 388.38 293.72 393.97 301.18 375.95 293.5 379.86 301.18 358.8 293.5 362.78 280.18 358.8 290.84 280.88" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="293.5 362.78 280.99 375.05 293.48 379.13 281.64 389.13 293.72 393.97 282.56 409.38 294.18 413.82 283.03 419.68 294.18 423.54 283.68 433.88" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="306.18 388.38 301.18 375.95 386.34 346.38 397.18 340.38 391.13 362.42 397.18 358.97 391.13 372.57 397.18 368.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="428.99 395.02 413.75 395.04 413.75 381.06 390.59 386.14 378.18 381.38 378.18 368.38 391.13 362.42 378.18 358.38 386.34 346.38 397.18 328.19 390.59 330.88 389.87 331.17 301.18 366.71" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="378.18" y1="368.38" x2="391.13" y2="372.57" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="429.95 384.86 413.75 381.06 420.93 377.37 392.08 372.92" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="470.02" y1="206.39" x2="469.94" y2="211.21" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="463.18 507.38 441.04 502.63 447.84 484.19 441.04 488.16 448.41 472.85 441.04 476.66 453.18 447.76 441.87 454.38 449.18 436.38 442.23 439.38 451.18 415.9 442.68 420.88 468.97 226.63 461.68 228.56 469.76 214.08 461.68 216.99 461.68 202.52 468.34 197.7" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polygon points="517.18 419.93 517.25 434.38 531.7 424.89 517.18 419.93" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="276.93 430.62 276.93 439.12 284.45 434.21 284.45 446.95 291.2 437.18 291.2 450.38 300.09 441.09 300.09 449.57 307.89 444.51 309.82 451.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="270.18" y1="427.38" x2="283.68" y2="429.44" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="245.02 253.03 300.18 223.38 311.29 211.43 311.29 228.33 300.18 223.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="312.47 227.89 365.18 199.38 369.18 192 372.28 192.8 372.28 205.6 365.18 199.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="171.86 280.29 171.86 290.07 248.18 252.38 248.18 260.7 315.18 227.38 315.18 234.75 375.56 204.38 375.56 211.66 394.76 202.19" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="411.05 183.54 419.5 179.64 426.38 168.05 426.38 184.38 419.18 179.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="310.18 176.38 304.15 186.83 290.18 184.38 304.15 176.21 289.95 172.51 304.18 162.38 304.18 176.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="311.8" y1="184.34" x2="304.15" y2="186.83" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="304.18" y1="175.38" x2="445.18" y2="198.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="289.68 158.88 307.18 157.38 304.18 162.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="517.18" y1="414.73" x2="505.91" y2="413.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="458.18 391.38 453.18 395.04 477.54 400.88" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="530.43 366.44 535.23 362.63 528.18 361.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="455.18 432.38 519.18 375.38 523.35 372.06" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="522.3 348.79 545.18 193.38 529.12 189.69 545.18 181.38 537.85 179.64" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="530.81" y1="164.17" x2="530.3" y2="172.04" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="523.3" y1="162.5" x2="489.77" y2="159.09" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="478.74" y1="157.38" x2="440.75" y2="153.12" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="399.18 155.25 391.68 157.38 396.61 148.64" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="392.18 156.38 378.18 154.62 392.18 147.38 384.18 145.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="387.08 137.52 392.18 133.27 392.18 147.38 429.68 151.57" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="386.34 346.38 390.18 331.38 397.18 311.29 390.78 314.74 384.66 313.02" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="381.18 323.38 378.18 326.38 390.49 330.51" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="387.18" y1="317.38" x2="390.78" y2="314.74" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="378.92" y1="303.4" x2="384.33" y2="241.93" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="531.18 438.38 537.91 421.26 531.7 424.89 538.55 409.88 532.1 414.38 539.61 390.78 528.75 398.57 517.18 409.38 532.1 414.38 517.18 419.93 491.67 423.99" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polygon points="534.15 380.92 528.75 398.57 540.41 376.45 534.15 380.92" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="535.23 362.63 541.37 359.32 534.15 380.92" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="550.79 190.36 545.18 193.38 551.39 179.64 545.18 181.38 552.18 165.38 545.18 167.38 539.51 171.34" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="608.18 137.38 600.96 150.8 601.18 141.38 578.99 156.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="574.36 159.09 571.28 109.35 571.28 160.44 567.08 110.04 567.08 162.5 561.64 110.93 561.64 164.17 555.52 111.94 556.62 166.87 550.35 112.79 550.35 164.96 548.21 164.47 545.85 113.53 545.18 163.78 541.42 114.26 541.42 162.5 537.85 114.85" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="431.18 113.88 431.18 96.13 429.3 105.86" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="449.23 107.59 444.5 141 444.5 98.64 438.26 139.62 438.26 97.35 433.46 124.51" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="454.18 116.01 450.33 141.93 450.33 109.56" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="459.2 124.15 456.4 143.54 456.4 119.5" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="462.45 110.35 462.45 101.64 461.44 108.63" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="463.84 131.86 462.45 144.99 462.45 129.54" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="466.94 117.91 466.94 102.78 465.57 115.61" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="467.71 138.28 466.94 145.99 466.94 137" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="471.18 125.67 471.18 103.51 469.29 122.42" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="471.44 144.47 471.18 146.93 471.18 144.23" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="536.05 161.83 536.05 114.54 533.74 160.8 533.74 114.54 532.03 160.8 532.03 113.84 530.18 160.38 530.18 113.55 528.18 160.38 528.18 113.18 526.07 159.44 526.07 112.82 524.55 159.09 524.55 112.55 522.28 158.58 522.28 112.16 520.13 158.09 520.13 111.79 517.5 157.49 517.5 111.34 514.84 156.89 514.84 110.88 512.58 156.38 512.58 110.49 510.33 155.86 510.33 110.1 507.62 155.25 507.62 109.63 505.28 154.72 505.28 109.35 503.09 154.22 503.09 108.85 500.04 153.52 500.04 108.4 496.93 152.82 496.93 107.79 492.83 151.89 492.83 107.08 489.4 151.11 489.4 106.55 485.32 148.92 485.32 106.15 483.03 145.05 481.85 143.06 481.85 105.51 480.16 140.22 478.74 137.82 478.74 104.72 476.75 134.47 475.69 133.27 475.69 104.13 473.13 128.36" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="548.18 445.38 543.12 451.78 543.12 443.58 535.23 451.78 535.23 441.14 528.75 452.38 529.47 438.66 518 434.64 517.25 434.38 518.18 448.38 529.73 438.81" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="365.32 378.9 369.18 377.58 369.18 382.8 375.37 380.19 375.37 389.38 381.03 382.47 380.28 393.97 384.66 396.13 386.11 384.08 390.59 395.71 391.36 386.44 391.13 372.57 378.18 381.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="391.36 386.44 395.36 394.92 398.23 389.38 400.18 394.38 406.18 392.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <path d="m449.18,436.38l79.56-37.8-79.56,37.8Z" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="453.18" y1="447.76" x2="449.18" y2="436.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="342.18" y1="32.38" x2="308.18" y2="161.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="345.18" y1="33.38" x2="310.18" y2="162.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="348.18" y1="33.38" x2="313.18" y2="162.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="428.18" y1="146.38" x2="357.18" y2="35.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="427.92" y1="141.16" x2="359.92" y2="35.16" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="425.18" y1="132.38" x2="363.18" y2="35.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="443.18" y1="195.38" x2="407.18" y2="42.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="448.18" y1="196.38" x2="410.18" y2="42.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="415.18" y1="43.37" x2="486.18" y2="164.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="418.18" y1="41.38" x2="489.18" y2="162.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="529.18" y1="376.38" x2="467.18" y2="251.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="531.18" y1="374.38" x2="467.18" y2="243.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="386.18" y1="326.38" x2="344.18" y2="258.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="388.18" y1="324.38" x2="346.18" y2="257.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="469.18" y1="199.38" x2="539.18" y2="171.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="469.18" y1="202.38" x2="541.18" y2="172.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="470.18" y1="205.38" x2="541.18" y2="175.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="387.18" y1="137.38" x2="318.18" y2="160.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="388.18" y1="139.38" x2="322.18" y2="161.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="389.18" y1="141.38" x2="325.18" y2="162.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="442.11" y1="95.77" x2="426.58" y2="94.33" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="576.2" y1="108.2" x2="454.72" y2="96.94" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="334.22 31.32 352.7 21.37 352.7 34.32 373.05 23.66 373.05 37.01 396.71 26.73 396.71 40.27 414.52 28.32 420.52 39" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="327.12 18.59 353.32 17.77 346.18 12.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polygon points="373.05 23.66 367.44 19.38 379.18 17.09 373.05 23.66" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="379.18 17.09 387.18 22.38 373.05 23.66" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polygon points="402.18 23.38 405.46 27.39 415.67 22.38 402.18 23.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polygon points="415.67 22.38 424.18 23.66 414.52 28.32 415.67 22.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="463.18 512.53 457.16 511.38 450.86 516.15 450.86 508.38 442.32 516.15 442.32 504.16 435.18 516.38 435.18 500.38 427.08 510.49 427.08 496.9 420.93 504.39 420.93 494.03 415.48 498.23 415.48 491.8" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="476.18" y1="529.03" x2="472.18" y2="524.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="471.65 531.88 465.15 520.62 465.15 529.35 457.18 516.38 470.11 516.71 465.15 520.62 476.18 520.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="457.18 516.38 457.18 526.7 450.86 516.15 450.86 524.12 444.41 516.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="563.28" y1="463.09" x2="560.18" y2="458.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="563.28" y1="456.96" x2="548.88" y2="451.78" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="560.18 464.95 556.08 455.98 556.29 464.95 549.9 452.38 549.9 460.88 543.12 451.78 543.12 458.51 538.13 451.78 538.13 457.67" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="513.18 446.38 510.7 438.9 517.25 434.38 510.24 431.88 506.71 433.84 507.3 443.92 502.18 434.38 496.14 441.19" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="417.74" y1="407.92" x2="415.18" y2="402.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="418.18" y1="401.72" x2="408.93" y2="395.93" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="414.74 408.92 410.06 397.09 410.06 408.83 404.7 392.87 397.18 402.2 391.68 397.88" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="376.68 394.88 375.37 389.38 371.68 391.88 370.93 384.86 365.09 389.57 365.18 381.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="324.54" y1="461.33" x2="321.18" y2="456.53" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="321.18 463.68 313.93 450.38 324.18 455.66" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="313.93 450.38 313.68 460.88 309.82 451.38 309.82 459.27 303.49 449.57 303.49 456.82 297.18 450.62" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="263.68 438.88 276.93 439.12 276.93 445.88" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="407.68 504.88 415.48 498.23 415.68 507.88 420.93 504.39 420.68 510.88" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="552.18" y1="441.79" x2="530.83" y2="439.2" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="365.63" y1="375.95" x2="378.16" y2="376.54" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="407.68 504.88 407.68 495.64 399.73 500.38 397.97 496.1" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                        </g>
                        <g id="Cable-holders_N_A_" data-name="Cable-holders(N/A)">
                            <polygon points="212.18 277.38 221.68 281.88 222.37 288.86 241.68 281.88 241.68 273.56 233.8 269.08 212.18 277.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="231.73 277.46 222.37 288.86 231.99 285.38 241.68 281.88 231.73 277.46" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="232.18" y1="277.38" x2="231.99" y2="285.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="220.18 280.38 219.65 275.06 237.18 268.38 237.18 273.61 220.18 280.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="217.18 279.38 216.65 274.06 231.18 268.38 232.18 270.38 220.18 275.38 220.18 278.38 217.18 279.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <circle cx="233.68" cy="265.88" r="3.5" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <circle cx="175.68" cy="245.88" r="3.5" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <polyline points="173.18 248.38 174.18 249.38 174.18 251.38 171.18 250.38 160.18 254.38 160.35 258.11 158.18 258.38 168.97 262.14 185.99 256.16 178.18 252.38 178.18 248.88" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m164.18,259.38v-4l12-4,2,1v2.16l-14,4.84Z" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="172.18 256.61 168.97 262.14 185.99 256.16 172.18 256.61" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                        </g>
                        <g id="Headblock-crane">
                            <polyline points="234.33 404.58 238.44 406.47 238.44 411.77" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <line x1="213.84" y1="395.2" x2="216.2" y2="396.28" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <polyline points="226.96 421.69 222.37 423.81 182.87 407.06 182.87 397.38 201.12 389.38 206.24 391.72" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <path d="m222.37,414v9.81-9.81Z" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <polyline points="238.44 406.47 222.37 414 182.87 397.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <polyline points="182.87 407.06 193.24 401.75 193.24 411.46 202.62 405.69 202.62 415.44 212.46 409.83 212.46 419.87 222.37 414" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".5"/>
                            <line x1="253.07" y1="426.89" x2="252.9" y2="426.81" fill="none" stroke="#ff7300" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="232.18 415.44 232.18 411 257.14 421.19 259.2 429.69 253.07 426.89" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <polyline points="261.25 428.88 259.18 420.38 234.18 410 232.18 411" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <g>
                                <polygon points="250.14 424.69 252.2 433.19 225.18 420.88 225.18 414.5 250.14 424.69" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                                <polyline points="254.25 432.38 252.18 423.88 227.18 413.5 225.18 414.5" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            </g>
                            <path d="m183.18,385.99v-4.75c0-.58.23-1.14.65-1.55l.82-.8" fill="none" stroke="#ff7300" stroke-linejoin="round" stroke-width=".75"/>
                            <path d="m192.28,378.82l.9-.45.64-1.92c.1-.29.28-.54.5-.73" fill="none" stroke="#ff7300" stroke-linejoin="round" stroke-width=".75"/>
                            <line x1="254.25" y1="432.38" x2="252.2" y2="433.19" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <line x1="257.14" y1="421.19" x2="259.18" y2="420.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <line x1="259.2" y1="429.69" x2="261.25" y2="428.88" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="184.8 396.53 166.18 389.38 163.18 394.38 182.87 403.03" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <polyline points="186.8 395.53 178.49 392.34 168.18 388.38 166.18 389.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <polyline points="183.18 386.3 178.18 384.38 175.18 389.38 188.42 395.2" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <polyline points="183.43 384.63 180.18 383.38 178.18 384.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <line x1="174.11" y1="390.65" x2="176.31" y2="389.87" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            <line x1="179.97" y1="391.48" x2="178.18" y2="392.22" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="225.18 420.88 250.14 424.69 252.18 423.88" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".5"/>
                            <line x1="182.87" y1="398.38" x2="163.41" y2="393.99" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".5"/>
                            <g id="Layer_18" data-name="Layer 18">
                                <line x1="236.46" y1="312.32" x2="231.02" y2="387.42" fill="none" stroke="#000" stroke-miterlimit="10"/>
                                <line x1="222.18" y1="308.88" x2="221.02" y2="392.42" fill="none" stroke="#000" stroke-miterlimit="10"/>
                                <line x1="189.53" y1="288.18" x2="188.18" y2="280.38" fill="none" stroke="#000" stroke-miterlimit="10"/>
                                <line x1="198.21" y1="374.62" x2="192.82" y2="320.91" fill="none" stroke="#000" stroke-miterlimit="10"/>
                                <line x1="174.46" y1="295.36" x2="173.18" y2="285.38" fill="none" stroke="#000" stroke-miterlimit="10"/>
                                <line x1="188.21" y1="378.62" x2="179.58" y2="326.37" fill="none" stroke="#000" stroke-miterlimit="10"/>
                            </g>
                        </g>
                        <polyline points="340.9 194.76 341.9 189.76 339.4 189.76 339.4 185.43" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="340.9 194.76 345.9 196.76 345.9 186.44" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m352.9,194.76v-6.59,6.59Z" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="345.9" y1="196.76" x2="352.9" y2="194.76" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="395.9 208.76 396.9 203.76 394.4 203.76 394.4 199.43" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <polyline points="395.9 208.76 400.9 210.76 400.9 200.44" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m407.9,208.76v-6.59,6.59Z" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="400.9" y1="210.76" x2="407.9" y2="208.76" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <g id="Trolley-crane-part">
                            <polygon points="254.17 295.74 254.17 315.13 258.18 313.36 267.18 309.37 267.18 290.62 254.17 295.74" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="267.18 316.09 258.18 313.36 267.18 309.37 267.18 302.88 283.18 307.38 270.68 314.18 267.18 316.09" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m254.17,315.13l-7.19-2.8s-12.02,3.1-16.91-4.43c-1.78-.06-3.79-.67-3.79-.67" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <polyline points="267.18 316.09 267.18 309.37 283.18 307.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="246.99 312.33 246.46 308.87 245.02 299.39" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <polyline points="254.17 307.24 246.46 308.87 230.18 305.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <polyline points="254.17 299.92 267.18 294.38 254.17 315.13" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="254.17 299.92 245.36 301.65 240.23 301.36" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="274.51" y1="312.34" x2="267.62" y2="309.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="267.18 309.37 275.18 305.13 267.43 305.38" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".25"/>
                            <g id="Headblock-partss">
                                <polygon points="243.44 434.01 247.44 436.01 247.44 441.01 243.44 438.88 243.44 434.01" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                                <polygon points="159.44 395.01 163.44 397.01 163.44 402.01 159.44 399.88 159.44 395.01" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                                <polyline points="247.44 441.01 249.44 438.01 263.59 430.71 265.95 431.26 265.95 425.44 261.44 424.01 260.63 425.91" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                                <polyline points="249.58 432.51 246.98 434.01 243.44 434.01" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".5"/>
                                <polyline points="247.44 436.88 248.85 436.16 263.94 428.34 265.95 425.44" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                                <line x1="166.76" y1="396.47" x2="163.44" y2="397.01" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                                <polyline points="163.44 402.01 167.44 399.01 170.44 398.01" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                                <line x1="159.44" y1="395.01" x2="163.44" y2="395.01" fill="none" stroke="#000" stroke-linejoin="round" stroke-width=".75"/>
                            </g>
                        </g>
                        <g id="rails">
                            <line x1="554.1" y1="583.07" x2="586.68" y2="597.88" fill="none" stroke="#ccc" stroke-miterlimit="10"/>
                            <line x1="246.18" y1="442.38" x2="529.18" y2="571.74" fill="none" stroke="#ccc" stroke-miterlimit="10"/>
                            <line x1="633.79" y1="504.87" x2="653.18" y2="512.38" fill="none" stroke="#ccc" stroke-miterlimit="10"/>
                            <line x1="317.18" y1="382.38" x2="605.18" y2="493.38" fill="none" stroke="#ccc" stroke-miterlimit="10"/>
                        </g>
                    </g>
                    <g id="6-end-buffers-stops" data-name="6-end-buffers-stops">
                        <polygon points="547.18 586.64 547.18 574.88 563.15 564.76 563.15 578.4 547.18 586.64" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polygon points="524.18 559.38 533.39 564.21 537.17 561.82 527.9 556.76 524.18 559.38" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <line x1="524.18" y1="563.38" x2="529.94" y2="566.4" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m524.18,561.38v2-4,2Z" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="529.18" y1="567.38" x2="547.18" y2="575.38" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polyline points="529.18 578.64 529.18 566.88 533.39 564.21 545.15 556.76 545.18 556.38 563.18 564.38" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <line x1="545.15" y1="585.47" x2="547.18" y2="586.38" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <line x1="529.18" y1="578.38" x2="531.07" y2="579.21" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polygon points="529.95 581.02 532.2 577.38 537.18 579.64 537.18 583.83 529.95 581.02" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polygon points="537.95 584.02 540.2 580.38 545.18 582.64 545.18 586.83 537.95 584.02" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polyline points="525.04 564.21 522.18 566.38 522.18 558.13 528.18 554.38 529.18 553.82 529.18 557.46" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polygon points="623.18 510.64 623.18 498.88 639.15 488.76 639.15 502.4 623.18 510.64" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polygon points="600.18 483.38 609.39 488.21 613.17 485.82 603.9 480.76 600.18 483.38" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <line x1="600.18" y1="487.38" x2="605.94" y2="490.4" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".75"/>
                        <path d="m600.18,485.38v2-4,2Z" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="605.18" y1="491.38" x2="623.18" y2="499.38" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polyline points="605.18 502.64 605.18 490.88 609.39 488.21 621.15 480.76 621.18 480.38 639.18 488.38" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <line x1="621.15" y1="509.47" x2="623.18" y2="510.38" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <line x1="605.18" y1="502.38" x2="607.07" y2="503.21" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polygon points="605.95 505.02 608.2 501.38 613.18 503.64 613.18 507.83 605.95 505.02" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polygon points="613.95 508.02 616.2 504.38 621.18 506.64 621.18 510.83 613.95 508.02" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polyline points="601.04 488.21 598.18 490.38 598.18 482.13 604.18 478.38 605.18 477.82 605.18 481.46" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <g id="details">
                            <polyline points="529.18 578.38 538.99 571.73 547.18 586.38 554.67 570.14 563.15 578.4" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="545.18" y1="556.38" x2="547.18" y2="574.88" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="529.18" y1="566.88" x2="563.18" y2="564.38" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="530.06 581.06 534.85 578.58 536.99 583.6" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="538.05 584.06 542.7 581.51 544.91 586.73" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="524.54" y1="559.38" x2="536.73" y2="562.1" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="524.18" y1="563.38" x2="532.52" y2="564.76" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="605.18 502.38 614.99 495.73 623.18 510.38 630.67 494.14 639.15 502.4" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="621.18" y1="480.38" x2="623.18" y2="498.88" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="605.18" y1="490.88" x2="639.18" y2="488.38" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="606.06 505.06 610.85 502.58 612.99 507.6" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <polyline points="614.05 508.06 618.7 505.51 620.91 510.73" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="600.54" y1="483.38" x2="612.73" y2="486.1" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                            <line x1="600.18" y1="487.38" x2="608.52" y2="488.76" :class="cranePart === 6 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".25"/>
                        </g>
                        <g id="End-stopper_fill" data-name="End-stopper fill" fill="none" opacity=".15">
                            <polygon points="547.18 586.64 547.18 574.88 563.15 564.76 563.15 578.4 547.18 586.64" fill="#ff7300"/>
                            <polygon points="524.18 559.38 533.39 564.21 537.17 561.82 527.9 556.76 524.18 559.38" fill="#ff7300"/>
                            <line x1="524.18" y1="563.38" x2="529.94" y2="566.4" fill="#ff7300"/>
                            <line x1="529.18" y1="567.38" x2="547.18" y2="575.38" fill="#ff7300"/>
                            <polyline points="529.18 578.64 529.18 566.88 533.39 564.21 545.15 556.76 545.18 556.38 563.18 564.38" fill="#ff7300"/>
                            <line x1="545.15" y1="585.47" x2="547.18" y2="586.38" fill="#ff7300"/>
                            <line x1="529.18" y1="578.38" x2="531.07" y2="579.21" fill="#ff7300"/>
                            <polygon points="529.95 581.02 532.2 577.38 537.18 579.64 537.18 583.83 529.95 581.02" fill="#ff7300"/>
                            <polygon points="537.95 584.02 540.2 580.38 545.18 582.64 545.18 586.83 537.95 584.02" fill="#ff7300"/>
                            <polyline points="525.04 564.21 522.18 566.38 522.18 558.13 528.18 554.38 529.18 553.82 529.18 557.46" fill="#ff7300"/>
                            <polygon points="623.18 510.64 623.18 498.88 639.15 488.76 639.15 502.4 623.18 510.64" fill="#ff7300"/>
                            <polygon points="600.18 483.38 609.39 488.21 613.17 485.82 603.9 480.76 600.18 483.38" fill="#ff7300"/>
                            <line x1="600.18" y1="487.38" x2="605.94" y2="490.4" fill="#ff7300"/>
                            <line x1="605.18" y1="491.38" x2="623.18" y2="499.38" fill="#ff7300"/>
                            <polyline points="605.18 502.64 605.18 490.88 609.39 488.21 621.15 480.76 621.18 480.38 639.18 488.38" fill="#ff7300"/>
                            <line x1="621.15" y1="509.47" x2="623.18" y2="510.38" fill="#ff7300"/>
                            <line x1="605.18" y1="502.38" x2="607.07" y2="503.21" fill="#ff7300"/>
                            <polygon points="605.95 505.02 608.2 501.38 613.18 503.64 613.18 507.83 605.95 505.02" fill="#ff7300"/>
                            <polygon points="613.95 508.02 616.2 504.38 621.18 506.64 621.18 510.83 613.95 508.02" fill="#ff7300"/>
                            <polyline points="601.04 488.21 598.18 490.38 598.18 482.13 604.18 478.38 605.18 477.82 605.18 481.46" fill="#ff7300"/>
                            <g id="details_copy" data-name="details copy">
                                <polyline points="529.18 578.38 538.99 571.73 547.18 586.38 554.67 570.14 563.15 578.4" fill="#ff7300"/>
                                <line x1="545.18" y1="556.38" x2="547.18" y2="574.88" fill="#ff7300"/>
                                <line x1="529.18" y1="566.88" x2="563.18" y2="564.38" fill="#ff7300"/>
                                <polyline points="530.06 581.06 534.85 578.58 536.99 583.6" fill="#ff7300"/>
                                <polyline points="538.05 584.06 542.7 581.51 544.91 586.73" fill="#ff7300"/>
                                <line x1="524.54" y1="559.38" x2="536.73" y2="562.1" fill="#ff7300"/>
                                <line x1="524.18" y1="563.38" x2="532.52" y2="564.76" fill="#ff7300"/>
                                <polyline points="605.18 502.38 614.99 495.73 623.18 510.38 630.67 494.14 639.15 502.4" fill="#ff7300"/>
                                <line x1="621.18" y1="480.38" x2="623.18" y2="498.88" fill="#ff7300"/>
                                <line x1="605.18" y1="490.88" x2="639.18" y2="488.38" fill="#ff7300"/>
                                <polyline points="606.06 505.06 610.85 502.58 612.99 507.6" fill="#ff7300"/>
                                <polyline points="614.05 508.06 618.7 505.51 620.91 510.73" fill="#ff7300"/>
                                <line x1="600.54" y1="483.38" x2="612.73" y2="486.1" fill="#ff7300"/>
                                <line x1="600.18" y1="487.38" x2="608.52" y2="488.76" fill="#ff7300"/>
                            </g>
                        </g>
                    </g>
                    <g id="5-twist-locks" data-name="5-twist-locks">
                        <line x1="165.08" y1="398.94" x2="168.08" y2="400.94" :class="cranePart === 5 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="168.57 401.23 168.08 401.22 167.59 401.21 167.84 400.79 168.09 400.37 168.33 400.8 168.57 401.23" :class="cranePart === 5 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="243.18" y1="436.38" x2="241.49" y2="435.35" :class="cranePart === 5 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        <polygon points="240.98 435.11 241.47 435.07 241.96 435.03 241.75 435.47 241.54 435.92 241.26 435.52 240.98 435.11" :class="cranePart === 5 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                    </g>
                    <g id="4-sheaves" data-name="4-sheaves">
                        <ellipse cx="63.18" cy="339.88" rx="4" ry="3.5" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10"/>
                        <polyline points="64.18 336.38 62.81 334.23 60.03 335.09 60.03 337.72 53.73 339.88 43.72 349.04 50.88 352.46 58.69 348.25 54.41 346.35" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round"/>
                        <polyline points="66.15 337.54 68.18 337.38 68.58 340.38 66.89 341.19" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10"/>
                        <polyline points="65.93 342.41 65.93 344.71 63.18 345.39 61.28 342.95" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10"/>
                        <polyline points="58.69 348.25 60.43 342.41 55.91 343.9 49.48 351.79" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round"/>
                        <polyline points="43.72 349.04 51.89 345.39 53.73 339.88" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round"/>
                        <ellipse cx="31.18" cy="323.88" rx="4" ry="3.5" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10"/>
                        <polyline points="32.18 320.38 30.81 318.23 28.03 319.09 28.03 321.72 21.73 323.88 11.72 333.04 18.88 336.46 26.69 332.25 22.41 330.35" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round"/>
                        <polyline points="33.93 326.41 33.93 328.71 31.18 329.39 29.28 326.95" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10"/>
                        <polyline points="26.69 332.25 28.43 326.41 23.91 327.9 17.48 335.79" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round"/>
                        <polyline points="11.72 333.04 19.89 329.39 21.73 323.88" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round"/>
                        <line x1="54.41" y1="346.35" x2="51.89" y2="345.39" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round"/>
                        <g id="_6._End-stops_Buffers_copy" data-name="6. End-stops &amp;amp; Buffers copy" fill="none" opacity=".15">
                            <ellipse cx="63.18" cy="339.88" rx="4" ry="3.5" fill="#ff7300"/>
                            <polyline points="64.18 336.38 62.81 334.23 60.03 335.09 60.03 337.72 53.73 339.88 43.72 349.04 50.88 352.46 58.69 348.25 54.41 346.35" fill="#ff7300"/>
                            <polyline points="66.15 337.54 68.18 337.38 68.58 340.38 66.89 341.19" fill="#ff7300"/>
                            <polyline points="65.93 342.41 65.93 344.71 63.18 345.39 61.28 342.95" fill="#ff7300"/>
                            <polyline points="58.69 348.25 60.43 342.41 55.91 343.9 49.48 351.79" fill="#ff7300"/>
                            <polyline points="43.72 349.04 51.89 345.39 53.73 339.88" fill="#ff7300"/>
                            <ellipse cx="31.18" cy="323.88" rx="4" ry="3.5" fill="#ff7300"/>
                            <polyline points="32.18 320.38 30.81 318.23 28.03 319.09 28.03 321.72 21.73 323.88 11.72 333.04 18.88 336.46 26.69 332.25 22.41 330.35" fill="#ff7300"/>
                            <polyline points="33.93 326.41 33.93 328.71 31.18 329.39 29.28 326.95" fill="#ff7300"/>
                            <polyline points="26.69 332.25 28.43 326.41 23.91 327.9 17.48 335.79" fill="#ff7300"/>
                            <polyline points="11.72 333.04 19.89 329.39 21.73 323.88" fill="#ff7300"/>
                            <line x1="54.41" y1="346.35" x2="51.89" y2="345.39" fill="#ff7300"/>
                        </g>
                        <g id="sheaves-top">
                            <polygon points="353.14 18.59 357.18 .38 365.66 .38 367.44 19.38 353.14 18.59" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="387.18 22.38 391.18 5.38 399.66 5.38 402.18 23.38 387.18 22.38" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polyline points="353.14 18.59 366.69 11.39 354.64 11.39 366.07 4.77 356.17 4.77 365.66 .38" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="387.18 22.38 401.24 16.68 388.15 16.68 400.44 10.95 389.58 10.95 399.18 5.38" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <g data-name="2-drums" fill="none" opacity=".15">
                                <polygon points="353.14 18.59 357.18 .38 365.66 .38 367.44 19.38 353.14 18.59" fill="#ff7300"/>
                                <polygon points="387.18 22.38 391.18 5.38 399.66 5.38 402.18 23.38 387.18 22.38" fill="#ff7300"/>
                                <polyline points="353.14 18.59 366.69 11.39 354.64 11.39 366.07 4.77 356.17 4.77 365.66 .38" fill="#ff7300"/>
                                <polyline points="387.18 22.38 401.24 16.68 388.15 16.68 400.44 10.95 389.58 10.95 399.18 5.38" fill="#ff7300"/>
                            </g>
                        </g>
                        <g id="4-sheaves-headblock" data-name="4. Sheaves-headblock">
                            <path d="m220.46,400.24c-2.24-.53-3.94-3.1-3.94-6.18,0-3.47,2.15-6.28,4.8-6.28s4.8,2.81,4.8,6.28c0,.73-.1,1.44-.27,2.09" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round"/>
                            <ellipse cx="188.49" cy="378.09" rx="3.97" ry="5.25" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10"/>
                            <ellipse cx="198.49" cy="374.09" rx="3.97" ry="5.25" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10"/>
                            <path d="m231.1,394.91c-2.65,0-4.8-2.81-4.8-6.28s2.15-6.28,4.8-6.28,4.8,2.81,4.8,6.28c0,1.66-.49,3.17-1.3,4.3" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round"/>
                            <polyline points="192.17 376.14 188.49 378.09 190.05 373.27" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="189.48 383.17 188.49 378.09 192.17 380.05" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="184.11 379.16 188.49 378.09 186.49 382.62" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="186.93 373.27 188.49 378.09 184.94 375.76" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="202.17 372.14 198.49 374.09 200.05 369.27" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="199.48 379.17 198.49 374.09 202.17 376.05" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="194.11 375.16 198.49 374.09 196.49 378.62" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="196.93 369.27 198.49 374.09 194.94 371.76" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="221.98 387.84 221.32 394.01 225.3 390.53" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <line x1="221.32" y1="394.01" x2="226.13" y2="392.84" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="221.94 396.36 221.48 393.87 226.01 395.39" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="218.82 399.43 221.48 393.87 216.57 395.02" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="219.03 388.54 221.48 393.87 217.08 391.1" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="231.98 382.84 231.32 389.01 235.3 385.53" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <line x1="231.32" y1="389.01" x2="236.13" y2="387.84" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="232.46 392.84 231.48 388.87 236.01 390.39" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="226.57 390.02 231.48 388.87 228.82 394.43" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                            <polyline points="229.03 383.54 231.48 388.87 227.08 386.1" :class="cranePart === 4 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".5"/>
                        </g>
                    </g>
                    <g id="3-drums" data-name="3-drums" class="translate-x-[50%] -translate-y-[25%]">
                        <circle cx="170.18" cy="281.38" r="5" :class="cranePart === 3 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <path d="m176.18,274.38c2.76,0,5,2.24,5,5,0,2.31-1.56,4.25-3.69,4.83" :class="cranePart === 3 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <path d="m182.18,272.38c2.76,0,5,2.24,5,5,0,2.31-1.56,4.25-3.69,4.83" :class="cranePart === 3 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <path d="m188.18,270.38c2.76,0,5,2.24,5,5,0,2.31-1.56,4.25-3.69,4.83" :class="cranePart === 3 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <path d="m194.18,268.38c2.76,0,5,2.24,5,5,0,2.31-1.56,4.25-3.69,4.83" :class="cranePart === 3 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <line x1="170.18" y1="276.38" x2="198.18" y2="267.38" :class="cranePart === 3 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <path d="m171.86,286.08l28.32-9.7.25-.35c1.62-.68,2.75-2.28,2.75-4.15,0-2.49-2.01-4.5-4.5-4.5-.44,0-.87.06-1.28.18" :class="cranePart === 5 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <g id="Layer_30" data-name="Layer 30" fill="none" opacity=".15">
                            <circle cx="170.18" cy="281.38" r="5" fill="#ff7300"/>
                            <path d="m171.77,287.19l28.32-9.7.34-1.46c1.62-.68,2.75-2.28,2.75-4.15,0-2.49-2.01-4.5-4.5-4.5-.44,0-.87.06-1.28.18l.78-.18-28,9,6-2c2.76,0-5.5.74-5.5,3.5,0,2.31,1,8,6.81,6.33l6-2c2.12-.58,3.69-2.52,3.69-4.83,0-2.76-2.24-5-5-5l4.5,2.5c2.76,0,6.5-2.26,6.5.5,0,2.31-1.56,4.25-3.69,4.83l6-2c2.12-.58,3.69-2.52,3.69-4.83,0-2.76-2.24-5-5-5" fill="#ff7300"/>
                        </g>
                    </g>
                    <g id="2-headblock" data-name="2-headblock">
                        <path d="m225.88,396.8l.51,1.01,4-2,.64-1.92c.22-.65.82-1.08,1.5-1.08h.93c.54,0,1.02.37,1.15.9l.78,3.1v4.37l-1.19,3.95v2.93l-8.81,4.06v-4.13l-3.83-2.43c-.73-.46-1.17-1.27-1.17-2.13v-4.75c0-.58.23-1.14.65-1.55l.82-.8c.34-.33.79-.52,1.27-.52h1.16c.68,0,1.3.38,1.6.99" :class="cranePart === 2 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <path d="m198.38,378.81v4.37l-1.19,3.95v2.93l-8.81,4.06v-4.13l-3.83-2.43c-.73-.46-1.17-1.27-1.17-2.13" :class="cranePart === 2 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polygon points="196.68 400.24 212.29 406.59 208.18 390.38 196.68 400.24" :class="cranePart === 2 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <line x1="220.18" y1="401.38" x2="212.29" y2="406.59" :class="cranePart === 2 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <line x1="208.18" y1="390.38" x2="220.18" y2="400.38" :class="cranePart === 2 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <polyline points="202.17 395.44 210.35 398.94 215.18 396.2" :class="cranePart === 2 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        <g id="_2._Headblock_Fill" data-name="2. Headblock Fill" fill="none" opacity=".15">
                            <path d="m225.88,396.8l.51,1.01,4-2,.64-1.92c.22-.65.82-1.08,1.5-1.08h.93c.54,0,1.02.37,1.15.9l.78,3.1v4.37l-1.19,3.95v2.93l-8.81,4.06v-4.13l-3.83-2.43c-.73-.46-1.17-1.27-1.17-2.13v-4.75c0-.58.23-1.14.65-1.55l.82-.8c.34-.33.79-.52,1.27-.52h1.16c.68,0,1.3.38,1.6.99" fill="#ff7300"/>
                            <path d="m198.38,378.81v4.37l-1.19,3.95v2.93l-8.81,4.06v-4.13l-3.83-2.43c-.73-.46-1.17-1.27-1.17-2.13" fill="#ff7300"/>
                            <polygon points="196.68 400.24 212.29 406.59 208.18 390.38 196.68 400.24" fill="#ff7300"/>
                            <line x1="220.18" y1="401.38" x2="212.29" y2="406.59" fill="#ff7300"/>
                            <line x1="208.18" y1="390.38" x2="220.18" y2="400.38" fill="#ff7300"/>
                            <polyline points="208.68 390.88 201.68 395.88 210.35 398.94 211.68 406.88 220.68 400.88 215.18 396.2" fill="#ff7300"/>
                        </g>
                    </g>
                    <g id="1-wheels" data-name="1-wheels">
                        <g id="Wheel1">
                            <polyline points="476.73 537.16 477.76 532.79 473.18 531.38" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="474.11" y1="536.21" x2="477.76" y2="532.79" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="460.18" y1="527.38" x2="457.56" y2="529.71" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m474.56,536.08c2,.29,3.55,2.15,3.54,4.39,0,2.09-1.34,3.83-3.15,4.3" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m474.01,536.03c.19,0,.37.01.55.04" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m473.77,536.58c1.87.42,3.27,2.2,3.27,4.34,0,2.44-1.84,4.42-4.11,4.42-1.7,0-3.15-1.12-3.77-2.71" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m464.01,540.18c-.36.16-.76.27-1.17.32-2.25.24-4.29-1.53-4.55-3.96-.12-1.13.16-2.21.73-3.06" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m457.83,529.98l2.98,8.73,10.6,4.87,2.71-7.37c-2.41-.92-4.83-1.85-7.24-2.77-3.01-1.15-6.03-2.3-9.04-3.46Z" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-2" data-name="Wheel1">
                            <polyline points="564.34 469.27 565.35 465.74 560.86 464.6" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="561.77" y1="468.51" x2="565.35" y2="465.74" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="550.18" y1="461.38" x2="545.56" y2="463.26" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m562.21,468.4c1.96.24,3.47,1.73,3.47,3.54,0,1.68-1.32,3.09-3.08,3.47" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m561.67,468.37c.18,0,.36.01.54.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m561.44,468.8c1.83.34,3.2,1.78,3.2,3.5,0,1.97-1.81,3.57-4.02,3.57-1.66,0-3.09-.9-3.7-2.19" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m551.88,471.71c-.36.13-.74.22-1.15.26-2.21.2-4.2-1.24-4.46-3.2-.12-.91.16-1.78.72-2.47" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="545.83 463.48 548.74 470.52 559.12 474.45 561.77 468.51 545.83 463.48" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-3" data-name="Wheel1">
                            <polyline points="543.54 462.5 544.4 459.09 540.61 457.99" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="541.38" y1="461.76" x2="544.4" y2="459.09" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="533.18" y1="454.38" x2="527.68" y2="456.7" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m541.75,461.66c1.66.23,2.94,1.67,2.93,3.42,0,1.63-1.11,2.99-2.6,3.35" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m541.29,461.63c.15,0,.31.01.46.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m541.1,462.05c1.55.32,2.71,1.72,2.7,3.38,0,1.9-1.53,3.45-3.4,3.44-1.41,0-2.61-.87-3.12-2.11" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m533.02,464.86c-.3.13-.63.21-.97.25-1.86.19-3.55-1.19-3.77-3.09-.1-.88.14-1.72.6-2.38" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="527.91 456.91 530.37 463.71 539.14 467.5 541.38 461.76 527.91 456.91" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-4" data-name="Wheel1">
                            <polyline points="521.51 453.61 522.39 450.11 518.5 448.98" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="519.29" y1="452.85" x2="522.39" y2="450.11" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="510.85" y1="445.25" x2="505.2" y2="447.64" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m519.67,452.74c1.71.24,3.02,1.72,3.02,3.52,0,1.67-1.14,3.07-2.68,3.45" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m519.2,452.71c.16,0,.32.01.47.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m519,453.15c1.59.33,2.78,1.77,2.78,3.48,0,1.96-1.57,3.55-3.5,3.54-1.45,0-2.69-.9-3.21-2.17" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m510.69,456.03c-.31.13-.64.22-1,.26-1.92.19-3.65-1.23-3.87-3.18-.1-.91.14-1.77.62-2.45" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="505.43 447.86 507.96 454.85 516.98 458.76 519.29 452.85 505.43 447.86" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-5" data-name="Wheel1">
                            <polyline points="417.54 413.5 418.4 410.09 414.61 408.99" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="415.38" y1="412.76" x2="418.4" y2="410.09" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="407.18" y1="405.38" x2="401.68" y2="407.7" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m415.75,412.66c1.66.23,2.94,1.67,2.93,3.42,0,1.63-1.11,2.99-2.6,3.35" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m415.29,412.63c.15,0,.31.01.46.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m415.1,413.05c1.55.32,2.71,1.72,2.7,3.38,0,1.9-1.53,3.45-3.4,3.44-1.41,0-2.61-.87-3.12-2.11" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m407.02,415.86c-.3.13-.63.21-.97.25-1.86.19-3.55-1.19-3.77-3.09-.1-.88.14-1.72.6-2.38" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="401.91 407.91 404.37 414.71 413.14 418.5 415.38 412.76 401.91 407.91" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-6" data-name="Wheel1">
                            <polyline points="400.4 407.06 401.17 403.96 397.72 402.95" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="398.42" y1="406.39" x2="401.17" y2="403.96" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="390.95" y1="399.65" x2="385.93" y2="401.77" fill="#fff" stroke="#ff6319" stroke-linejoin="round" stroke-width=".75"/>
                            <path d="m398.76,406.29c1.51.21,2.68,1.53,2.67,3.12,0,1.48-1.01,2.72-2.37,3.05" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m398.34,406.27c.14,0,.28,0,.42.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m398.17,406.65c1.41.3,2.47,1.56,2.47,3.08,0,1.74-1.39,3.14-3.1,3.14-1.28,0-2.38-.8-2.85-1.92" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m390.8,409.21c-.27.12-.57.19-.88.23-1.7.17-3.24-1.09-3.43-2.82-.09-.8.12-1.57.55-2.17" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="386.14 401.96 388.38 408.16 396.38 411.62 398.42 406.39 386.14 401.96" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-linejoin="round" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-7" data-name="Wheel1">
                            <polyline points="383.65 401.06 384.42 397.96 383.18 396.38" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="381.67" y1="400.39" x2="384.42" y2="397.96" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="374.2" y1="393.65" x2="369.18" y2="395.77" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m382.01,400.29c1.51.21,2.68,1.53,2.67,3.12,0,1.48-1.01,2.72-2.37,3.05" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m381.59,400.27c.14,0,.28,0,.42.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m381.42,400.65c1.41.3,2.47,1.56,2.47,3.08,0,1.74-1.39,3.14-3.1,3.14-1.28,0-2.38-.8-2.85-1.92" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m374.05,403.21c-.27.12-.57.19-.88.23-1.7.17-3.24-1.09-3.43-2.82-.09-.8.12-1.57.55-2.17" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="369.39 395.96 371.63 402.16 379.63 405.62 381.67 400.39 369.39 395.96" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-8" data-name="Wheel1">
                            <polyline points="367.65 395.06 368.42 391.96 364.97 390.95" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="365.67" y1="394.39" x2="368.42" y2="391.96" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="359.18" y1="388.38" x2="353.18" y2="389.77" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m366.01,394.29c1.51.21,2.68,1.53,2.67,3.12,0,1.48-1.01,2.72-2.37,3.05" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m365.59,394.27c.14,0,.28,0,.42.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m365.42,394.65c1.41.3,2.47,1.56,2.47,3.08,0,1.74-1.39,3.14-3.1,3.14-1.28,0-2.38-.8-2.85-1.92" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m358.05,397.21c-.27.12-.57.19-.88.23-1.7.17-3.24-1.09-3.43-2.82-.09-.8.12-1.57.55-2.17" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="353.39 389.96 355.63 396.16 363.63 399.62 365.67 394.39 353.39 389.96" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-9" data-name="Wheel1">
                            <polyline points="324.72 468.03 325.53 464.37 321.94 463.19" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="322.67" y1="467.23" x2="325.53" y2="464.37" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="313" y1="460.38" x2="309.68" y2="461.8" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m323.01,467.12c1.57.25,2.78,1.8,2.78,3.68,0,1.75-1.05,3.21-2.47,3.6" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m322.58,467.09c.15,0,.29.01.43.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m322.4,467.54c1.47.35,2.57,1.84,2.56,3.63,0,2.05-1.45,3.7-3.22,3.7-1.33,0-2.47-.94-2.96-2.27" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m314.74,470.56c-.29.14-.59.23-.92.27-1.77.2-3.36-1.28-3.57-3.32-.1-.95.13-1.85.57-2.56" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="309.9 462.02 312.23 469.33 320.54 473.4 322.67 467.23 309.9 462.02" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-10" data-name="Wheel1">
                            <polyline points="307.11 462.06 307.84 458.96 304.48 457.67" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="305.28" y1="461.39" x2="307.84" y2="458.96" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="298.34" y1="454.65" x2="293.68" y2="456.77" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m305.59,461.29c1.4.21,2.49,1.53,2.48,3.12,0,1.48-.94,2.72-2.2,3.05" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m305.21,461.27c.13,0,.26,0,.39.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m305.04,461.65c1.31.3,2.29,1.56,2.29,3.08,0,1.74-1.29,3.14-2.88,3.14-1.19,0-2.21-.8-2.64-1.92" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m298.2,464.21c-.25.12-.53.19-.82.23-1.58.17-3.01-1.09-3.19-2.82-.09-.8.11-1.57.51-2.17" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="293.87 456.96 295.96 463.16 303.38 466.62 305.28 461.39 293.87 456.96" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-11" data-name="Wheel1">
                            <polyline points="290.68 454.41 291.43 451.4 290.18 450.38" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="288.77" y1="453.75" x2="291.43" y2="451.4" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="281.18" y1="447.38" x2="276.68" y2="449.29" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m289.1,453.66c1.46.2,2.59,1.48,2.59,3.02,0,1.44-.98,2.64-2.3,2.96" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m288.69,453.64c.14,0,.27,0,.4.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m288.52,454.01c1.36.29,2.39,1.51,2.39,2.99,0,1.68-1.35,3.04-3,3.04-1.24,0-2.3-.77-2.76-1.86" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m281.39,456.49c-.27.11-.55.19-.86.22-1.64.17-3.13-1.05-3.32-2.73-.09-.78.12-1.52.53-2.1" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="276.88 449.47 279.05 455.47 286.79 458.82 288.77 453.75 276.88 449.47" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-12" data-name="Wheel1">
                            <line x1="272.89" y1="447.35" x2="273.18" y2="445.38" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="271.29" y1="446.74" x2="273.18" y2="445.38" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="264.18" y1="441.38" x2="260.68" y2="442.38" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m271.56,446.65c1.23.19,2.18,1.38,2.17,2.82,0,1.34-.82,2.46-1.93,2.76" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m271.22,446.63c.11,0,.23,0,.34.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m271.08,446.97c1.15.27,2.01,1.41,2,2.79,0,1.57-1.13,2.84-2.52,2.84-1.04,0-1.94-.72-2.32-1.74" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m265.09,449.29c-.22.11-.46.18-.72.2-1.38.16-2.63-.98-2.79-2.54-.07-.73.1-1.42.45-1.96" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="261.3 442.74 263.12 448.34 269.62 451.47 271.29 446.74 261.3 442.74" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-13" data-name="Wheel1">
                            <polyline points="503 446.41 503.88 442.91 499.98 441.78" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="500.77" y1="445.65" x2="503.88" y2="442.91" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="494.4" y1="439.08" x2="486.68" y2="440.44" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m501.15,445.54c1.71.24,3.02,1.72,3.02,3.52,0,1.67-1.14,3.07-2.68,3.45" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m500.68,445.51c.16,0,.32.01.47.03" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m500.48,445.95c1.59.33,2.78,1.77,2.78,3.48,0,1.96-1.57,3.55-3.5,3.54-1.45,0-2.69-.9-3.21-2.17" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m492.18,448.83c-.31.13-.64.22-1,.26-1.92.19-3.65-1.23-3.87-3.18-.1-.91.14-1.77.62-2.45" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="486.91 440.66 489.45 447.65 498.47 451.56 500.77 445.65 486.91 440.66" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-14" data-name="Wheel1">
                            <line x1="451.11" y1="526.21" x2="452.18" y2="525.38" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="437.18" y1="518.38" x2="434.56" y2="519.71" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m451.56,526.08c2,.29,3.55,2.15,3.54,4.39,0,2.09-1.34,3.83-3.15,4.3" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m451.01,526.03c.19,0,.37.01.55.04" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m450.77,526.58c1.87.42,3.27,2.2,3.27,4.34,0,2.44-1.84,4.42-4.11,4.42-1.7,0-3.15-1.12-3.77-2.71" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m441.01,530.18c-.36.16-.76.27-1.17.32-2.25.24-4.29-1.53-4.55-3.96-.12-1.13.16-2.21.73-3.06" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="434.83 519.98 437.81 528.71 448.4 533.57 451.11 526.21 434.83 519.98" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-15" data-name="Wheel1">
                            <polyline points="430.73 516.16 429.18 512.38 427.18 510.38" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="428.11" y1="515.21" x2="430.18" y2="513.38" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <line x1="413.18" y1="507.38" x2="411.56" y2="508.71" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m428.56,515.08c2,.29,3.55,2.15,3.54,4.39,0,2.09-1.34,3.83-3.15,4.3" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m428.01,515.03c.19,0,.37.01.55.04" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m427.77,515.58c1.87.42,3.27,2.2,3.27,4.34,0,2.44-1.84,4.42-4.11,4.42-1.7,0-3.15-1.12-3.77-2.71" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m418.01,519.18c-.36.16-.76.27-1.17.32-2.25.24-4.29-1.53-4.55-3.96-.12-1.13.16-2.21.73-3.06" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="411.83 508.98 414.81 517.71 425.4 522.57 428.11 515.21 411.83 508.98" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Wheel1-16" data-name="Wheel1">
                            <line x1="393.18" y1="497.38" x2="389.56" y2="498.71" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m406.56,505.08c2,.29,3.55,2.15,3.54,4.39,0,2.09-1.34,3.83-3.15,4.3" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m406.01,505.03c.19,0,.37.01.55.04" fill="#fff" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m405.77,505.58c1.87.42,3.27,2.2,3.27,4.34,0,2.44-1.84,4.42-4.11,4.42-1.7,0-3.15-1.12-3.77-2.71" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <path d="m396.01,509.18c-.36.16-.76.27-1.17.32-2.25.24-4.29-1.53-4.55-3.96-.12-1.13.16-2.21.73-3.06" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                            <polygon points="389.83 498.98 392.81 507.71 403.4 512.57 406.11 505.21 389.83 498.98" :class="cranePart === 1 ? 'stroke-orange-500 fill-none' : 'stroke-orange-500/25 fill-none'" stroke-miterlimit="10" stroke-width=".75"/>
                        </g>
                        <g id="Layer_7_copy" data-name="Layer 7 copy">
                            <polyline points="460.81 538.71 466.68 533.48 471.23 543.49" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="448.4 533.57 443.95 523.48 437.81 528.71" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="425.18 522.47 420.75 512.48 414.81 517.71" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="403.4 512.57 398.39 502.25 392.81 507.71" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="320.54 473.4 317.07 464.95 312.23 469.33" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="302.87 466.38 300.29 459.45 295.96 463.16" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="286.5 458.7 282.83 451.61 279.05 455.47" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="269.41 451.36 266.64 444.88 263.12 448.34" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="355.63 396.16 359.87 392.45 363.32 399.49" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="371.63 402.16 376.1 398.45 379.63 405.62" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="388.38 408.16 393.04 404.45 396.38 411.62" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="404.37 414.71 409.78 410.74 412.77 418.34" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="489.45 447.65 494.71 443.46 498.47 451.56" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="507.96 454.85 513.22 450.66 516.98 458.76" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="530.37 463.71 535.88 459.87 539.14 467.5" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <polyline points="549.06 470.65 554.79 466.3 559.12 474.45" fill="none" stroke="#ff6319" stroke-miterlimit="10" stroke-width=".25"/>
                            <line x1="365.18" y1="381.38" x2="359.18" y2="389.38" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".25"/>
                        </g>
                        <g id="_1._Wheels_overlay" data-name="1. Wheels overlay" fill="none" opacity=".26">
                            <g id="wheel-15">
                                <polyline points="476.73 537.16 477.76 532.79 473.18 531.38" fill="#ff7300"/>
                                <line x1="474.11" y1="536.21" x2="477.76" y2="532.79" fill="#ff7300"/>
                                <line x1="460.18" y1="527.38" x2="457.56" y2="529.71" fill="#ff7300"/>
                                <path d="m474.56,536.08c2,.29,3.55,2.15,3.54,4.39,0,2.09-1.34,3.83-3.15,4.3" fill="#ff7300"/>
                                <path d="m474.01,536.03c.19,0,.37.01.55.04" fill="#ff7300"/>
                                <path d="m473.77,536.58c1.87.42,3.27,2.2,3.27,4.34,0,2.44-1.84,4.42-4.11,4.42-1.7,0-3.15-1.12-3.77-2.71" fill="#ff7300"/>
                                <path d="m464.01,540.18c-.36.16-.76.27-1.17.32-2.25.24-4.29-1.53-4.55-3.96-.12-1.13.16-2.21.73-3.06" fill="#ff7300"/>
                                <path d="m457.83,529.98l2.98,8.73,10.6,4.87,2.71-7.37c-2.41-.92-4.83-1.85-7.24-2.77-3.01-1.15-6.03-2.3-9.04-3.46Z" fill="#ff7300"/>
                            </g>
                            <g id="wheel-14">
                                <polyline points="564.34 469.27 565.35 465.74 560.86 464.6" fill="#ff7300"/>
                                <line x1="561.77" y1="468.51" x2="565.35" y2="465.74" fill="#ff7300"/>
                                <line x1="550.18" y1="461.38" x2="545.56" y2="463.26" fill="#ff7300"/>
                                <path d="m562.21,468.4c1.96.24,3.47,1.73,3.47,3.54,0,1.68-1.32,3.09-3.08,3.47" fill="#ff7300"/>
                                <path d="m561.67,468.37c.18,0,.36.01.54.03" fill="#ff7300"/>
                                <path d="m561.44,468.8c1.83.34,3.2,1.78,3.2,3.5,0,1.97-1.81,3.57-4.02,3.57-1.66,0-3.09-.9-3.7-2.19" fill="#ff7300"/>
                                <path d="m551.88,471.71c-.36.13-.74.22-1.15.26-2.21.2-4.2-1.24-4.46-3.2-.12-.91.16-1.78.72-2.47" fill="#ff7300"/>
                                <polygon points="545.83 463.48 548.74 470.52 559.12 474.45 561.77 468.51 545.83 463.48" fill="#ff7300"/>
                            </g>
                            <g id="wheel-13">
                                <polyline points="543.54 462.5 544.4 459.09 540.61 457.99" fill="#ff7300"/>
                                <line x1="541.38" y1="461.76" x2="544.4" y2="459.09" fill="#ff7300"/>
                                <line x1="533.18" y1="454.38" x2="527.68" y2="456.7" fill="#ff7300"/>
                                <path d="m541.75,461.66c1.66.23,2.94,1.67,2.93,3.42,0,1.63-1.11,2.99-2.6,3.35" fill="#ff7300"/>
                                <path d="m541.29,461.63c.15,0,.31.01.46.03" fill="#ff7300"/>
                                <path d="m541.1,462.05c1.55.32,2.71,1.72,2.7,3.38,0,1.9-1.53,3.45-3.4,3.44-1.41,0-2.61-.87-3.12-2.11" fill="#ff7300"/>
                                <path d="m533.02,464.86c-.3.13-.63.21-.97.25-1.86.19-3.55-1.19-3.77-3.09-.1-.88.14-1.72.6-2.38" fill="#ff7300"/>
                                <polygon points="527.91 456.91 530.37 463.71 539.14 467.5 541.38 461.76 527.91 456.91" fill="#ff7300"/>
                            </g>
                            <g id="wheel-12">
                                <polyline points="521.51 453.61 522.39 450.11 518.5 448.98" fill="#ff7300"/>
                                <line x1="519.29" y1="452.85" x2="522.39" y2="450.11" fill="#ff7300"/>
                                <line x1="510.85" y1="445.25" x2="505.2" y2="447.64" fill="#ff7300"/>
                                <path d="m519.67,452.74c1.71.24,3.02,1.72,3.02,3.52,0,1.67-1.14,3.07-2.68,3.45" fill="#ff7300"/>
                                <path d="m519.2,452.71c.16,0,.32.01.47.03" fill="#ff7300"/>
                                <path d="m519,453.15c1.59.33,2.78,1.77,2.78,3.48,0,1.96-1.57,3.55-3.5,3.54-1.45,0-2.69-.9-3.21-2.17" fill="#ff7300"/>
                                <path d="m510.69,456.03c-.31.13-.64.22-1,.26-1.92.19-3.65-1.23-3.87-3.18-.1-.91.14-1.77.62-2.45" fill="#ff7300"/>
                                <polygon points="505.43 447.86 507.96 454.85 516.98 458.76 519.29 452.85 505.43 447.86" fill="#ff7300"/>
                            </g>
                            <g id="wheel-11">
                                <polyline points="417.54 413.5 418.4 410.09 414.61 408.99" fill="#ff7300"/>
                                <line x1="415.38" y1="412.76" x2="418.4" y2="410.09" fill="#ff7300"/>
                                <line x1="407.18" y1="405.38" x2="401.68" y2="407.7" fill="#ff7300"/>
                                <path d="m415.75,412.66c1.66.23,2.94,1.67,2.93,3.42,0,1.63-1.11,2.99-2.6,3.35" fill="#ff7300"/>
                                <path d="m415.29,412.63c.15,0,.31.01.46.03" fill="#ff7300"/>
                                <path d="m415.1,413.05c1.55.32,2.71,1.72,2.7,3.38,0,1.9-1.53,3.45-3.4,3.44-1.41,0-2.61-.87-3.12-2.11" fill="#ff7300"/>
                                <path d="m407.02,415.86c-.3.13-.63.21-.97.25-1.86.19-3.55-1.19-3.77-3.09-.1-.88.14-1.72.6-2.38" fill="#ff7300"/>
                                <polygon points="401.91 407.91 404.37 414.71 413.14 418.5 415.38 412.76 401.91 407.91" fill="#ff7300"/>
                            </g>
                            <g id="wheel-10">
                                <polyline points="400.4 407.06 401.17 403.96 397.72 402.95" fill="#ff7300"/>
                                <line x1="398.42" y1="406.39" x2="401.17" y2="403.96" fill="#ff7300"/>
                                <line x1="390.95" y1="399.65" x2="385.93" y2="401.77" fill="#ff7300"/>
                                <path d="m398.76,406.29c1.51.21,2.68,1.53,2.67,3.12,0,1.48-1.01,2.72-2.37,3.05" fill="#ff7300"/>
                                <path d="m398.34,406.27c.14,0,.28,0,.42.03" fill="#ff7300"/>
                                <path d="m398.17,406.65c1.41.3,2.47,1.56,2.47,3.08,0,1.74-1.39,3.14-3.1,3.14-1.28,0-2.38-.8-2.85-1.92" fill="#ff7300"/>
                                <path d="m390.8,409.21c-.27.12-.57.19-.88.23-1.7.17-3.24-1.09-3.43-2.82-.09-.8.12-1.57.55-2.17" fill="#ff7300"/>
                                <polygon points="386.14 401.96 388.38 408.16 396.38 411.62 398.42 406.39 386.14 401.96" fill="#ff7300"/>
                            </g>
                            <g id="wheel-9">
                                <polyline points="383.65 401.06 384.42 397.96 383.18 396.38" fill="#ff7300"/>
                                <line x1="381.67" y1="400.39" x2="384.42" y2="397.96" fill="#ff7300"/>
                                <line x1="374.2" y1="393.65" x2="369.18" y2="395.77" fill="#ff7300"/>
                                <path d="m382.01,400.29c1.51.21,2.68,1.53,2.67,3.12,0,1.48-1.01,2.72-2.37,3.05" fill="#ff7300"/>
                                <path d="m381.59,400.27c.14,0,.28,0,.42.03" fill="#ff7300"/>
                                <path d="m381.42,400.65c1.41.3,2.47,1.56,2.47,3.08,0,1.74-1.39,3.14-3.1,3.14-1.28,0-2.38-.8-2.85-1.92" fill="#ff7300"/>
                                <path d="m374.05,403.21c-.27.12-.57.19-.88.23-1.7.17-3.24-1.09-3.43-2.82-.09-.8.12-1.57.55-2.17" fill="#ff7300"/>
                                <polygon points="369.39 395.96 371.63 402.16 379.63 405.62 381.67 400.39 369.39 395.96" fill="#ff7300"/>
                            </g>
                            <g id="wheel-8">
                                <polyline points="367.65 395.06 368.42 391.96 364.97 390.95" fill="#ff7300"/>
                                <line x1="365.67" y1="394.39" x2="368.42" y2="391.96" fill="#ff7300"/>
                                <line x1="359.18" y1="388.38" x2="353.18" y2="389.77" fill="#ff7300"/>
                                <path d="m366.01,394.29c1.51.21,2.68,1.53,2.67,3.12,0,1.48-1.01,2.72-2.37,3.05" fill="#ff7300"/>
                                <path d="m365.59,394.27c.14,0,.28,0,.42.03" fill="#ff7300"/>
                                <path d="m365.42,394.65c1.41.3,2.47,1.56,2.47,3.08,0,1.74-1.39,3.14-3.1,3.14-1.28,0-2.38-.8-2.85-1.92" fill="#ff7300"/>
                                <path d="m358.05,397.21c-.27.12-.57.19-.88.23-1.7.17-3.24-1.09-3.43-2.82-.09-.8.12-1.57.55-2.17" fill="#ff7300"/>
                                <polygon points="353.39 389.96 355.63 396.16 363.63 399.62 365.67 394.39 353.39 389.96" fill="#ff7300"/>
                            </g>
                            <g id="wheel-7">
                                <polyline points="324.72 468.03 325.53 464.37 321.94 463.19" fill="#ff7300"/>
                                <line x1="322.67" y1="467.23" x2="325.53" y2="464.37" fill="#ff7300"/>
                                <line x1="313" y1="460.38" x2="309.68" y2="461.8" fill="#ff7300"/>
                                <path d="m323.01,467.12c1.57.25,2.78,1.8,2.78,3.68,0,1.75-1.05,3.21-2.47,3.6" fill="#ff7300"/>
                                <path d="m322.58,467.09c.15,0,.29.01.43.03" fill="#ff7300"/>
                                <path d="m322.4,467.54c1.47.35,2.57,1.84,2.56,3.63,0,2.05-1.45,3.7-3.22,3.7-1.33,0-2.47-.94-2.96-2.27" fill="#ff7300"/>
                                <path d="m314.74,470.56c-.29.14-.59.23-.92.27-1.77.2-3.36-1.28-3.57-3.32-.1-.95.13-1.85.57-2.56" fill="#ff7300"/>
                                <polygon points="309.9 462.02 312.23 469.33 320.54 473.4 322.67 467.23 309.9 462.02" fill="#ff7300"/>
                            </g>
                            <g id="wheel-6">
                                <polyline points="307.11 462.06 307.84 458.96 304.48 457.67" fill="#ff7300"/>
                                <line x1="305.28" y1="461.39" x2="307.84" y2="458.96" fill="#ff7300"/>
                                <line x1="298.34" y1="454.65" x2="293.68" y2="456.77" fill="#ff7300"/>
                                <path d="m305.59,461.29c1.4.21,2.49,1.53,2.48,3.12,0,1.48-.94,2.72-2.2,3.05" fill="#ff7300"/>
                                <path d="m305.21,461.27c.13,0,.26,0,.39.03" fill="#ff7300"/>
                                <path d="m305.04,461.65c1.31.3,2.29,1.56,2.29,3.08,0,1.74-1.29,3.14-2.88,3.14-1.19,0-2.21-.8-2.64-1.92" fill="#ff7300"/>
                                <path d="m298.2,464.21c-.25.12-.53.19-.82.23-1.58.17-3.01-1.09-3.19-2.82-.09-.8.11-1.57.51-2.17" fill="#ff7300"/>
                                <polygon points="293.87 456.96 295.96 463.16 303.38 466.62 305.28 461.39 293.87 456.96" fill="#ff7300"/>
                            </g>
                            <g id="wheel-5">
                                <polyline points="290.68 454.41 291.43 451.4 290.18 450.38" fill="#ff7300"/>
                                <line x1="288.77" y1="453.75" x2="291.43" y2="451.4" fill="#ff7300"/>
                                <line x1="281.18" y1="447.38" x2="276.68" y2="449.29" fill="#ff7300"/>
                                <path d="m289.1,453.66c1.46.2,2.59,1.48,2.59,3.02,0,1.44-.98,2.64-2.3,2.96" fill="#ff7300"/>
                                <path d="m288.69,453.64c.14,0,.27,0,.4.03" fill="#ff7300"/>
                                <path d="m288.52,454.01c1.36.29,2.39,1.51,2.39,2.99,0,1.68-1.35,3.04-3,3.04-1.24,0-2.3-.77-2.76-1.86" fill="#ff7300"/>
                                <path d="m281.39,456.49c-.27.11-.55.19-.86.22-1.64.17-3.13-1.05-3.32-2.73-.09-.78.12-1.52.53-2.1" fill="#ff7300"/>
                                <polygon points="276.88 449.47 279.05 455.47 286.79 458.82 288.77 453.75 276.88 449.47" fill="#ff7300"/>
                            </g>
                            <g id="wheel-4">
                                <line x1="272.89" y1="447.35" x2="273.18" y2="445.38" fill="#ff7300"/>
                                <line x1="271.29" y1="446.74" x2="273.18" y2="445.38" fill="#ff7300"/>
                                <line x1="264.18" y1="441.38" x2="260.68" y2="442.38" fill="#ff7300"/>
                                <path d="m271.56,446.65c1.23.19,2.18,1.38,2.17,2.82,0,1.34-.82,2.46-1.93,2.76" fill="#ff7300"/>
                                <path d="m271.22,446.63c.11,0,.23,0,.34.03" fill="#ff7300"/>
                                <path d="m271.08,446.97c1.15.27,2.01,1.41,2,2.79,0,1.57-1.13,2.84-2.52,2.84-1.04,0-1.94-.72-2.32-1.74" fill="#ff7300"/>
                                <path d="m265.09,449.29c-.22.11-.46.18-.72.2-1.38.16-2.63-.98-2.79-2.54-.07-.73.1-1.42.45-1.96" fill="#ff7300"/>
                                <polygon points="261.3 442.74 263.12 448.34 269.62 451.47 271.29 446.74 261.3 442.74" fill="#ff7300"/>
                            </g>
                            <g id="wheel-3">
                                <polyline points="503 446.41 503.88 442.91 499.98 441.78" fill="#ff7300"/>
                                <line x1="500.77" y1="445.65" x2="503.88" y2="442.91" fill="#ff7300"/>
                                <line x1="494.4" y1="439.08" x2="486.68" y2="440.44" fill="#ff7300"/>
                                <path d="m501.15,445.54c1.71.24,3.02,1.72,3.02,3.52,0,1.67-1.14,3.07-2.68,3.45" fill="#ff7300"/>
                                <path d="m500.68,445.51c.16,0,.32.01.47.03" fill="#ff7300"/>
                                <path d="m500.48,445.95c1.59.33,2.78,1.77,2.78,3.48,0,1.96-1.57,3.55-3.5,3.54-1.45,0-2.69-.9-3.21-2.17" fill="#ff7300"/>
                                <path d="m492.18,448.83c-.31.13-.64.22-1,.26-1.92.19-3.65-1.23-3.87-3.18-.1-.91.14-1.77.62-2.45" fill="#ff7300"/>
                                <polygon points="486.91 440.66 489.45 447.65 498.47 451.56 500.77 445.65 486.91 440.66" fill="#ff7300"/>
                            </g>
                            <g id="wheel-2">
                                <line x1="451.11" y1="526.21" x2="452.18" y2="525.38" fill="#ff7300"/>
                                <line x1="437.18" y1="518.38" x2="434.56" y2="519.71" fill="#ff7300"/>
                                <path d="m451.56,526.08c2,.29,3.55,2.15,3.54,4.39,0,2.09-1.34,3.83-3.15,4.3" fill="#ff7300"/>
                                <path d="m451.01,526.03c.19,0,.37.01.55.04" fill="#ff7300"/>
                                <path d="m450.77,526.58c1.87.42,3.27,2.2,3.27,4.34,0,2.44-1.84,4.42-4.11,4.42-1.7,0-3.15-1.12-3.77-2.71" fill="#ff7300"/>
                                <path d="m441.01,530.18c-.36.16-.76.27-1.17.32-2.25.24-4.29-1.53-4.55-3.96-.12-1.13.16-2.21.73-3.06" fill="#ff7300"/>
                                <polygon points="434.83 519.98 437.81 528.71 448.4 533.57 451.11 526.21 434.83 519.98" fill="#ff7300"/>
                            </g>
                            <g id="wheel-1">
                                <polyline points="430.73 516.16 429.18 512.38 427.18 510.38" fill="#ff7300"/>
                                <line x1="428.11" y1="515.21" x2="430.18" y2="513.38" fill="#ff7300"/>
                                <line x1="413.18" y1="507.38" x2="411.56" y2="508.71" fill="#ff7300"/>
                                <path d="m428.56,515.08c2,.29,3.55,2.15,3.54,4.39,0,2.09-1.34,3.83-3.15,4.3" fill="#ff7300"/>
                                <path d="m428.01,515.03c.19,0,.37.01.55.04" fill="#ff7300"/>
                                <path d="m427.77,515.58c1.87.42,3.27,2.2,3.27,4.34,0,2.44-1.84,4.42-4.11,4.42-1.7,0-3.15-1.12-3.77-2.71" fill="#ff7300"/>
                                <path d="m418.01,519.18c-.36.16-.76.27-1.17.32-2.25.24-4.29-1.53-4.55-3.96-.12-1.13.16-2.21.73-3.06" fill="#ff7300"/>
                                <polygon points="411.83 508.98 414.81 517.71 425.4 522.57 428.11 515.21 411.83 508.98" fill="#ff7300"/>
                            </g>
                            <g id="Wheel1-17" data-name="Wheel1">
                                <line x1="393.18" y1="497.38" x2="389.56" y2="498.71" fill="#ff7300"/>
                                <path d="m406.56,505.08c2,.29,3.55,2.15,3.54,4.39,0,2.09-1.34,3.83-3.15,4.3" fill="#ff7300"/>
                                <path d="m406.01,505.03c.19,0,.37.01.55.04" fill="#ff7300"/>
                                <path d="m405.77,505.58c1.87.42,3.27,2.2,3.27,4.34,0,2.44-1.84,4.42-4.11,4.42-1.7,0-3.15-1.12-3.77-2.71" fill="#ff7300"/>
                                <path d="m396.01,509.18c-.36.16-.76.27-1.17.32-2.25.24-4.29-1.53-4.55-3.96-.12-1.13.16-2.21.73-3.06" fill="#ff7300"/>
                                <polygon points="389.83 498.98 392.81 507.71 403.4 512.57 406.11 505.21 389.83 498.98" fill="#ff7300"/>
                            </g>
                            <g id="Layer_7_copy_2" data-name="Layer 7 copy 2">
                                <polyline points="460.81 538.71 466.68 533.48 471.23 543.49" fill="#ff7300"/>
                                <polyline points="448.4 533.57 443.95 523.48 437.81 528.71" fill="#ff7300"/>
                                <polyline points="425.18 522.47 420.75 512.48 414.81 517.71" fill="#ff7300"/>
                                <polyline points="403.4 512.57 398.39 502.25 392.81 507.71" fill="#ff7300"/>
                                <polyline points="320.54 473.4 317.07 464.95 312.23 469.33" fill="#ff7300"/>
                                <polyline points="302.87 466.38 300.29 459.45 295.96 463.16" fill="#ff7300"/>
                                <polyline points="286.5 458.7 282.83 451.61 279.05 455.47" fill="#ff7300"/>
                                <polyline points="269.41 451.36 266.64 444.88 263.12 448.34" fill="#ff7300"/>
                                <polyline points="355.63 396.16 359.87 392.45 363.32 399.49" fill="#ff7300"/>
                                <polyline points="371.63 402.16 376.1 398.45 379.63 405.62" fill="#ff7300"/>
                                <polyline points="388.38 408.16 393.04 404.45 396.38 411.62" fill="#ff7300"/>
                                <polyline points="404.37 414.71 409.78 410.74 412.77 418.34" fill="#ff7300"/>
                                <polyline points="489.45 447.65 494.71 443.46 498.47 451.56" fill="#ff7300"/>
                                <polyline points="507.96 454.85 513.22 450.66 516.98 458.76" fill="#ff7300"/>
                                <polyline points="530.37 463.71 535.88 459.87 539.14 467.5" fill="#ff7300"/>
                                <polyline points="549.06 470.65 554.79 466.3 559.12 474.45" fill="#ff7300"/>
                            </g>
                        </g>
                        <circle cx="168.68" cy="281.88" r="5"  class="translate-x-[50%] -translate-y-[25%]" :class="cranePart === 1 ? 'fill-orange-500 stroke-none' : 'fill-orange-500/25 stroke-none'"/>
                    </g>
                    <g id="crane-cables">
                        <line x1="347.76" y1="94.19" x2="235.26" y2="263.64" fill="none" stroke="#000" stroke-miterlimit="10"/>
                        <line x1="351.44" y1="88.64" x2="347.76" y2="94.19" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="395.26" y1="22.64" x2="351.44" y2="88.64" fill="none" stroke="#000" stroke-miterlimit="10"/>
                        <line x1="302.26" y1="90.64" x2="178.17" y2="243.6" fill="none" stroke="#000" stroke-miterlimit="10"/>
                        <line x1="306.03" y1="85.89" x2="302.26" y2="90.64" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".75"/>
                        <line x1="360.37" y1="18.85" x2="306.03" y2="85.89" fill="none" stroke="#000" stroke-miterlimit="10"/>
                        <circle cx="301.76" cy="91.14" r="1.5"/>
                        <circle cx="306.26" cy="85.64" r="1.5"/>
                        <circle cx="347.76" cy="94.14" r="1.5"/>
                        <circle cx="351.26" cy="88.64" r="1.5"/>
                        <circle cx="360.26" cy="18.64" r="1.5"/>
                        <circle cx="395.26" cy="22.64" r="1.5"/>
                        <circle cx="178.26" cy="243.64" r="1.5"/>
                        <circle cx="236.26" cy="262.64" r="1.5"/>
                    </g>
                    <g id="Numbers">
                        <g id="6-desktop" data-name="6" x-on:click.prevent="cranePart=6"  class="hidden lg:inline-block lg:hover:cursor-pointer">
                            <circle cx="580.86" cy="535.3" r="14" :class="cranePart===6 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'" stroke-miterlimit="10"/>
                            <path d="m583.01,532.1c-.22-.01-.49,0-.79.05-1.65.28-2.53,1.49-2.71,2.77h.04c.37-.49,1.02-.9,1.88-.9,1.38,0,2.35,1,2.35,2.52,0,1.43-.97,2.75-2.59,2.75s-2.76-1.29-2.76-3.32c0-1.54.55-2.75,1.32-3.51.65-.64,1.51-1.03,2.5-1.15.31-.05.58-.06.77-.06v.86Zm-.3,4.5c0-1.12-.64-1.79-1.61-1.79-.64,0-1.22.4-1.51.96-.07.12-.12.28-.12.47.02,1.28.61,2.23,1.71,2.23.91,0,1.52-.76,1.52-1.87Z" :class="cranePart===6 ? 'fill-gray-50' : 'fill-blue-900'"/>
                        </g>
                        <g id="6-mobile" data-name="6" x-on:click.prevent="cranePart=6" class="inline-block lg:hidden hover:cursor-pointer">
                            <circle cx="591" cy="532" r="24" stroke-miterlimit="10" :class="cranePart===6 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'"/>
                            <text x="587" y="537" :class="cranePart===6 ? 'fill-gray-50' : 'fill-blue-900'">
                                <tspan>6</tspan>
                            </text>
                        </g>
                        <g id="5-desktop" data-name="5" x-on:click.prevent="cranePart=5"  class="hidden lg:inline-block lg:hover:cursor-pointer">
                            <circle cx="143.86" cy="411.3" r="14" :class="cranePart===5 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'" stroke-miterlimit="10"/>
                            <path d="m146.22,408.24h-2.97l-.3,2c.18-.02.35-.05.64-.05.6,0,1.2.13,1.68.42.61.35,1.12,1.02,1.12,2,0,1.52-1.21,2.66-2.9,2.66-.85,0-1.57-.24-1.94-.48l.26-.8c.32.19.96.43,1.67.43,1,0,1.85-.65,1.85-1.69-.01-1.01-.68-1.73-2.24-1.73-.44,0-.79.05-1.08.08l.5-3.74h3.73v.89Z" :class="cranePart===5 ? 'fill-gray-50' : 'fill-blue-900'"/>
                        </g>
                        <g id="5-mobile" data-name="5" x-on:click.prevent="cranePart=5" class="inline-block lg:hidden hover:cursor-pointer">
                            <circle cx="154" cy="430" r="24" stroke-miterlimit="10" :class="cranePart===5 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'"/>
                            <text x="150" y="435" :class="cranePart===5 ? 'fill-gray-50' : 'fill-blue-900'">
                                <tspan>5</tspan>
                            </text>
                        </g>
                        <g id="4-desktop" data-name="4" x-on:click.prevent="cranePart=4"  class="hidden lg:inline-block lg:hover:cursor-pointer">
                            <circle cx="38.86" cy="292.3" r="14" :class="cranePart===4 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'" stroke-miterlimit="10"/>
                            <path d="m39.83,296.15v-2.12h-3.62v-.7l3.48-4.98h1.14v4.85h1.09v.83h-1.09v2.12h-1Zm0-2.95v-2.6c0-.41.01-.82.04-1.22h-.04c-.24.46-.43.79-.65,1.15l-1.91,2.65v.02h2.55Z" :class="cranePart===4 ? 'fill-gray-50' : 'fill-blue-900'"/>
                        </g>
                        <g id="4-mobile" data-name="4" x-on:click.prevent="cranePart=4" class="inline-block lg:hidden hover:cursor-pointer">
                            <circle cx="40" cy="280" r="24" stroke-miterlimit="10" :class="cranePart===4 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'"/>
                            <text x="36" y="285" :class="cranePart===4 ? 'fill-gray-50' : 'fill-blue-900'">
                                <tspan>4</tspan>
                            </text>
                        </g>
                        <g id="3-desktop" data-name="3" x-on:click.prevent="cranePart=3"  class="hidden lg:inline-block lg:hover:cursor-pointer">
                            <circle cx="540" cy="78" r="14" :class="cranePart===3 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'" stroke-miterlimit="10"/>
                            <text x="715" y="109" :class="cranePart===3 ? 'fill-gray-50' : 'fill-blue-900'" transform="scale(0.75)">
                                <tspan>3</tspan>
                            </text>
                        </g>
                        <g id="3-mobile" data-name="3" x-on:click.prevent="cranePart=3" class="inline-block lg:hidden hover:cursor-pointer">
                            <circle cx="544" cy="66" r="24" stroke-miterlimit="10" :class="cranePart===3 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'"/>
                            <text x="540" y="71" :class="cranePart===3 ? 'fill-gray-50' : 'fill-blue-900'">
                                <tspan>3</tspan>
                            </text>
                        </g>
                        <g id="7-desktop" data-name="7" x-on:click.prevent="cranePart=7"  class="hidden lg:inline-block lg:hover:cursor-pointer">
                            <circle cx="147" cy="242" r="14" :class="cranePart===7 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'" stroke-miterlimit="10"/>
                            <text x="191" y="328" :class="cranePart===7 ? 'fill-gray-50' : 'fill-blue-900'" transform="scale(0.75)">
                                <tspan>7</tspan>
                            </text>
                        </g>
                        <g id="7-mobile" data-name="7" x-on:click.prevent="cranePart=7" class="inline-block lg:hidden hover:cursor-pointer">
                            <circle cx="150" cy="215" r="24" stroke-miterlimit="10" :class="cranePart===7 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'"/>
                            <text x="146" y="220" :class="cranePart===7 ? 'fill-gray-50' : 'fill-blue-900'">
                                <tspan>7</tspan>
                            </text>
                        </g>
                        <g id="2-desktop" data-name="2" x-on:click.prevent="cranePart=2"  class="hidden lg:inline-block lg:hover:cursor-pointer">
                            <circle cx="256.03" cy="375.95" r="14" :class="cranePart===2 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'" stroke-miterlimit="10"/>
                            <path d="m253.73,379.8v-.65l.83-.8c1.99-1.89,2.89-2.9,2.9-4.08,0-.79-.38-1.52-1.55-1.52-.71,0-1.3.36-1.66.66l-.34-.74c.54-.46,1.31-.79,2.21-.79,1.68,0,2.39,1.15,2.39,2.27,0,1.44-1.04,2.6-2.69,4.19l-.62.58v.02h3.5v.88h-4.98Z" :class="cranePart===2 ? 'fill-gray-50' : 'fill-blue-900'"/>
                        </g>
                        <g id="2-mobile" data-name="2" x-on:click.prevent="cranePart=2" class="inline-block lg:hidden hover:cursor-pointer">
                            <circle cx="260" cy="380" r="24" stroke-miterlimit="10" :class="cranePart===2 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'"/>
                            <text x="256" y="385" :class="cranePart===2 ? 'fill-gray-50' : 'fill-blue-900'">
                                <tspan>2</tspan>
                            </text>                                
                        </g>
                        <g id="1-desktop" data-name="1" x-on:click.prevent="cranePart=1"  class="hidden lg:inline-block lg:hover:cursor-pointer">
                            <circle cx="428.34" cy="552.64" r="14" :class="cranePart===1 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'" stroke-miterlimit="10"/>
                            <path d="m428.33,549.68h-.02l-1.36.73-.2-.8,1.7-.91h.9v7.8h-1.02v-6.81Z" :class="cranePart===1 ? 'fill-gray-50' : 'fill-blue-900'"/>
                        </g>
                        <g id="1-mobile" data-name="1" x-on:click.prevent="cranePart=1" class="inline-block lg:hidden hover:cursor-pointer">
                            <circle cx="380" cy="550" r="24" stroke-miterlimit="10" :class="cranePart===1 ? 'stroke-gray-50 fill-blue-900' : 'stroke-blue-900 fill-gray-50'"/>
                            <text x="376" y="555" :class="cranePart===1 ? 'fill-gray-50' : 'fill-blue-900'">
                                <tspan>1</tspan>
                            </text>                                
                        </g>
                    </g>
                </svg>
            </div>

            <div class="flex h-full items-center">
                <div class="hidden lg:w-1/4 lg:min-w-[228px] lg:flex flex-col lg:items-center lg:items-start py-10 lg:py-0 space-y-2 lg:shrink-0 lg:grow-0">
                    <button
                        :class="cranePart===1 ? 'gtx-btn-alt bg-accent border-2 border-accent text-white' : 'gtx-btn bg-white border-2 border-secondary'"
                        class="w-full lg:w-full flex items-center justify-center lg:justify-start hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-[2px] cursor-pointer"
                        x-on:click.prevent="cranePart=1"
                    >
                        <span class="sen uppercase font-bold tracking-w0idest text-[0.8rem] flex items-center ml-4">
                            <?php echo $wheels['part_title']; ?>
                        </span>
                    </button>

                    <button
                        :class="cranePart===3 ? 'gtx-btn-alt bg-accent border-2 border-accent text-white' : 'gtx-btn bg-white border-2 border-secondary'" 
                        class="w-full lg:w-full flex items-center justify-center lg:justify-start hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-[2px] cursor-pointer"
                        x-on:click.prevent="cranePart=3"
                    >
                        <span class="sen uppercase font-bold tracking-widest text-[0.8rem] flex items-center ml-4">
                            <?php echo $drums['part_title']; ?>
                        </span>
                    </button>

                    <button
                        :class="cranePart===4 ? 'gtx-btn-alt bg-accent border-2 border-accent text-white' : 'gtx-btn bg-white border-2 border-secondary'" 
                        class="w-full lg:w-full flex items-center justify-center lg:justify-start hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-[2px] cursor-pointer"
                        x-on:click.prevent="cranePart=4"
                    >
                        <span class="sen uppercase font-bold tracking-widest text-[0.8rem] flex items-center ml-4">
                            <?php echo $sheaves['part_title']; ?>
                        </span>
                    </button>

                    <button
                        :class="cranePart===7 ? 'gtx-btn-alt bg-accent border-2 border-accent text-white' : 'gtx-btn bg-white border-2 border-secondary'" 
                        class="w-full lg:w-full flex items-center justify-center lg:justify-start hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-[2px] cursor-pointer"
                        x-on:click.prevent="cranePart=7"
                    >
                        <span class="sen uppercase font-bold tracking-widest text-[0.8rem] flex items-center ml-4">
                            <?php echo $rollers['part_title']; ?>
                        </span>
                    </button>

                    <button
                        :class="cranePart===5 ? 'gtx-btn-alt bg-accent border-2 border-accent text-white' : 'gtx-btn bg-white border-2 border-secondary'" 
                        class="w-full lg:w-full flex items-center justify-center lg:justify-start hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-[2px] cursor-pointer"
                        x-on:click.prevent="cranePart=5"
                    >
                        <span class="sen uppercase font-bold tracking-widest text-[0.8rem] flex items-center ml-4">
                            <?php echo $twistLocks['part_title']; ?>
                        </span>
                    </button>

                    <button
                        :class="cranePart===6 ? 'gtx-btn-alt bg-accent border-2 border-accent text-white' : 'gtx-btn bg-white border-2 border-secondary'" 
                        class="w-full lg:w-full flex items-center justify-center lg:justify-start hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-[2px] cursor-pointer"
                        x-on:click.prevent="cranePart=6"
                    >
                        <span class="sen uppercase font-bold tracking-widest text-[0.8rem] flex items-center ml-4">
                            <?php echo $endStopsBuffers['part_title']; ?>
                        </span>
                    </button>

                    <button
                        :class="cranePart===2 ? 'gtx-btn-alt bg-accent border-2 border-accent text-white' : 'gtx-btn bg-white border-2 border-secondary'" 
                        class="w-full lg:w-full flex items-center justify-center lg:justify-start hover:bg-primary lg:hover:translate-x-4 transition-all duration-500 ease-in-out lg:translate-x-[2px] cursor-pointer"
                        x-on:click.prevent="cranePart=2"
                    >
                        <span class="sen uppercase font-bold tracking-widest text-[0.8rem] flex items-center ml-4">
                            <?php echo $headblock['part_title']; ?>
                        </span>
                    </button>
                </div>
                <div class="p-4 z-10 bg-primary flex flex-col" x-show="cranePart === 1">
                    <h2 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6 max-w-max">
                        <?php echo $wheels['part_title']; ?>
                    </h2>
                    <p class="body-text text-white mb-6 text-left md:text-center lg:text-left">
                        <?php echo $wheels['part_prose']; ?>
                    </p>
                    <!-- CTA Button  -->
                    <?php if(!empty($wheels['part_button'])) : ?>
                        <a href="<?php echo $wheels['part_button']['url'] ?>" class="ports-btn max-w-max">
                            <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo $wheels['part_button']['title'] ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="p-4 z-10 bg-primary flex flex-col" x-show="cranePart === 3">
                    <h2 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6 max-w-max">
                        <?php echo $drums['part_title']; ?>
                    </h2>
                    <p class="body-text text-white mb-6 text-left md:text-center lg:text-left">
                        <?php echo $drums['part_prose']; ?>
                    </p>
                    <!-- CTA Button  -->
                    <?php if(!empty($drums['part_button'])) : ?>
                        <a href="<?php echo $drums['part_button']['url'] ?>" class="ports-btn max-w-max">
                            <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo $drums['part_button']['title'] ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="p-4 z-10 bg-primary flex flex-col" x-show="cranePart === 4">
                    <h2 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6 max-w-max">
                        <?php echo $sheaves['part_title']; ?>
                    </h2>
                    <p class="body-text text-white mb-6 text-left md:text-center lg:text-left">
                        <?php echo $sheaves['part_prose']; ?>
                    </p>
                    <!-- CTA Button  -->
                    <?php if(!empty($sheaves['part_button'])) : ?>
                        <a href="<?php echo $sheaves['part_button']['url'] ?>" class="ports-btn max-w-max">
                            <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo $sheaves['part_button']['title'] ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="p-4 z-10 bg-primary flex flex-col" x-show="cranePart === 7">
                    <h2 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6 max-w-max">
                        <?php echo $rollers['part_title']; ?>
                    </h2>
                    <p class="body-text text-white mb-6 text-left md:text-center lg:text-left">
                        <?php echo $rollers['part_prose']; ?>
                    </p>
                    <!-- CTA Button  -->
                    <?php if(!empty($rollers['part_button'])) : ?>
                        <a href="<?php echo $rollers['part_button']['url'] ?>" class="ports-btn max-w-max">
                            <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo $rollers['part_button']['title'] ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="p-4 z-10 bg-primary flex flex-col" x-show="cranePart === 5">
                    <h2 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6 max-w-max">
                        <?php echo $twistLocks['part_title']; ?>
                    </h2>
                    <p class="body-text text-white mb-6 text-left md:text-center lg:text-left">
                        <?php echo $twistLocks['part_prose']; ?>
                    </p>
                    <!-- CTA Button  -->
                    <?php if(!empty($twistLocks['part_button'])) : ?>
                        <a href="<?php echo $twistLocks['part_button']['url'] ?>" class="ports-btn max-w-max">
                            <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo $twistLocks['part_button']['title'] ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="p-4 z-10 bg-primary flex flex-col" x-show="cranePart === 6">
                    <h2 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6 max-w-max">
                        <?php echo $endStopsBuffers['part_title']; ?>
                    </h2>
                    <p class="body-text text-white mb-6 text-left md:text-center lg:text-left">
                        <?php echo $endStopsBuffers['part_prose']; ?>
                    </p>
                    <!-- CTA Button  -->
                    <?php if(!empty($endStopsBuffers['part_button'])) : ?>
                        <a href="<?php echo $endStopsBuffers['part_button']['url'] ?>" class="ports-btn max-w-max">
                            <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo $endStopsBuffers['part_button']['title'] ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="p-4 z-10 bg-primary flex flex-col" x-show="cranePart === 2">
                    <h2 class="inline-block heading--xs text-white bg-accent font-bold px-2 mb-6 max-w-max">
                        <?php echo $headblock['part_title']; ?>
                    </h2>
                    <p class="body-text text-white mb-6 text-left md:text-center lg:text-left">
                        <?php echo $headblock['part_prose']; ?>
                    </p>
                    <!-- CTA Button  -->
                    <?php if(!empty($headblock['part_button'])) : ?>
                        <a href="<?php echo $headblock['part_button']['url'] ?>" class="ports-btn max-w-max">
                            <span class="sen uppercase font-bold tracking-widest text-base text-white flex items-center"><?php echo $headblock['part_button']['title'] ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>
<?php } ?>