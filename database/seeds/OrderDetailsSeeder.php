<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [1, 1, 1, 1, 7, 272, 300, 4, NULL, NULL, 0, 0, 30, 120, 1200, 1320, 13, 1, NULL, '2022-03-23 09:53:46', '2022-03-23 09:54:47'],
            [2, 3, 1, 1, 2, 96, 1400, 2, NULL, NULL, 0, 0, 50, 100, 2800, 2900, 13, 1, NULL, '2022-03-23 09:53:46', '2022-03-23 09:53:46'],
            [3, 3, 1, 1, 7, 202, 653, 4, NULL, NULL, 0, 0, 30, 120, 2612, 2732, 13, 1, NULL, '2022-03-23 09:53:46', '2022-03-23 10:00:55'],
            [4, 1, 1, 2, 7, 4, 1200, 1, NULL, NULL, 0, 0, 80, 80, 1200, 1280, 13, 1, NULL, '2022-03-23 09:59:31', '2022-03-23 10:05:59'],
            [5, 1, 1, 2, 2, 265, 4500, 1, NULL, NULL, 0, 0, 100, 100, 4500, 4600, 13, 1, NULL, '2022-03-23 09:59:31', '2022-03-23 09:59:31'],
            [6, 3, 1, 2, 7, 30, 4500, 1, NULL, NULL, 0, 0, 100, 100, 4500, 4600, 13, 1, NULL, '2022-03-23 09:59:31', '2022-03-23 10:01:38'],
            [7, 1, 1, 2, 7, 7, 2900, 1, NULL, NULL, 0, 0, 120, 120, 2900, 3020, 13, 1, NULL, '2022-03-23 09:59:31', '2022-03-23 10:02:01'],
            [8, 3, 1, 2, 2, 3, 1200, 1, NULL, NULL, 0, 0, 120, 120, 1200, 1320, 13, 1, NULL, '2022-03-23 09:59:31', '2022-03-23 09:59:31'],
            [9, 3, 1, 2, 7, 34, 4500, 1, NULL, NULL, 0, 0, 50, 50, 4500, 4550, 13, 1, NULL, '2022-03-23 09:59:31', '2022-03-23 10:01:15'],
            [10, 3, 1, 2, 2, 29, 2100, 1, NULL, NULL, 0, 0, 50, 50, 2100, 2150, 13, 1, NULL, '2022-03-23 09:59:31', '2022-03-23 09:59:31'],
            [11, 3, 1, 3, 7, 72, 1250, 1, NULL, NULL, 0, 0, 48, 48, 1250, 1298, 13, 1, NULL, '2022-03-23 10:05:08', '2022-03-23 10:05:27'],
            [12, 1, 1, 3, 7, 95, 4500, 1, NULL, NULL, 0, 0, 50, 50, 4500, 4550, 13, 1, NULL, '2022-03-23 10:05:08', '2022-03-23 10:05:40'],
            [13, 3, 1, 3, 2, 228, 4500, 1, NULL, NULL, 0, 0, 100, 100, 4500, 4600, 13, 1, NULL, '2022-03-23 10:05:08', '2022-03-23 10:05:08'],
            [14, 1, 1, 3, 2, 51, 490, 1, NULL, NULL, 0, 0, 11, 11, 490, 501, 13, 1, NULL, '2022-03-23 10:05:08', '2022-03-23 10:05:08'],
            [15, 1, 2, 4, 1, 125, 600, 2, NULL, NULL, 0, 0, 20, 40, 1200, 1240, 13, 1, NULL, '2022-03-23 10:27:24', '2022-03-23 10:38:18'],
            [16, 3, 2, 4, 4, 120, 950, 2, NULL, NULL, 0, 0, 50, 100, 1900, 2000, 13, 1, NULL, '2022-03-23 10:27:24', '2022-03-23 10:39:29'],
            [17, 1, 2, 4, 6, 123, 8000, 4, NULL, NULL, 0, 0, 200, 800, 32000, 32800, 13, 1, NULL, '2022-03-23 10:27:24', '2022-03-23 10:40:36'],
            [18, 3, 2, 4, 3, 126, 600, 1, NULL, NULL, 0, 0, 30, 30, 600, 630, 13, 1, NULL, '2022-03-23 10:27:24', '2022-03-23 10:41:37'],
            [19, 1, 2, 4, 2, 119, 9900, 2, NULL, NULL, 0, 0, 50, 100, 19800, 19900, 13, 1, NULL, '2022-03-23 10:27:24', '2022-03-23 10:27:24'],
            [20, 3, 2, 4, 4, 116, 650, 3, NULL, NULL, 0, 0, 30, 90, 1950, 2040, 13, 1, NULL, '2022-03-23 10:27:24', '2022-03-23 10:40:48'],
            [21, 3, 2, 4, 6, 117, 950, 6, NULL, NULL, 0, 0, 100, 600, 5700, 6300, 13, 1, NULL, '2022-03-23 10:27:24', '2022-03-23 10:41:02'],
            [22, 3, 2, 5, 2, 209, 4500, 1, NULL, NULL, 0, 0, 30, 30, 4500, 4530, 13, 1, NULL, '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [23, 3, 2, 5, 2, 90, 2500, 1, NULL, NULL, 0, 0, 50, 50, 2500, 2550, 13, 1, NULL, '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [24, 1, 2, 5, 2, 220, 18000, 1, NULL, NULL, 0, 0, 30, 30, 18000, 18030, 13, 1, NULL, '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [25, 3, 2, 5, 7, 192, 175, 1, NULL, NULL, 0, 0, 9, 9, 175, 184, 13, 1, NULL, '2022-03-23 10:30:34', '2022-03-23 10:34:04'],
            [26, 3, 2, 5, 2, 30, 4500, 1, NULL, NULL, 0, 0, 100, 100, 4500, 4600, 13, 1, NULL, '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [27, 1, 2, 5, 2, 25, 161500, 1, NULL, NULL, 0, 0, 59, 59, 161500, 161559, 13, 1, NULL, '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [28, 1, 2, 5, 2, 23, 700, 1, NULL, NULL, 0, 0, 50, 50, 700, 750, 13, 1, NULL, '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [29, 3, 3, 6, 5, 133, 4500, 1, NULL, NULL, 0, 0, 50, 50, 4500, 4550, 13, 1, NULL, '2022-03-23 10:53:38', '2022-03-23 11:18:57'],
            [30, 3, 3, 6, 4, 131, 900, 4, NULL, NULL, 0, 0, 30, 120, 3600, 3720, 13, 1, NULL, '2022-03-23 10:53:38', '2022-03-23 11:19:15'],
            [31, 3, 3, 6, 2, 292, 12000, 1, NULL, NULL, 0, 0, 100, 100, 12000, 12100, 13, 1, NULL, '2022-03-23 10:53:38', '2022-03-23 10:53:38'],
            [32, 3, 3, 6, 2, 68, 1400, 1, NULL, NULL, 0, 0, 50, 50, 1400, 1450, 13, 1, NULL, '2022-03-23 10:53:38', '2022-03-23 10:53:38'],
            [33, 1, 3, 6, 4, 7, 2900, 1, NULL, NULL, 0, 0, 120, 120, 2900, 3020, 13, 1, NULL, '2022-03-23 10:53:38', '2022-03-23 11:20:04'],
            [34, 1, 3, 6, 2, 4, 1200, 1, NULL, NULL, 0, 0, 80, 80, 1200, 1280, 13, 1, NULL, '2022-03-23 10:53:38', '2022-03-23 10:53:38'],
            [35, 1, 3, 6, 5, 10, 4990, 3, NULL, NULL, 0, 0, 80, 240, 14970, 15210, 13, 1, NULL, '2022-03-23 10:53:38', '2022-03-23 11:20:25'],
            [36, 1, 3, 7, 1, 275, 450, 1, NULL, NULL, 0, 0, 15, 15, 450, 465, 13, 1, NULL, '2022-03-23 11:00:52', '2022-03-23 11:05:42'],
            [37, 1, 3, 7, 5, 220, 18000, 1, NULL, NULL, 0, 0, 30, 30, 18000, 18030, 13, 1, NULL, '2022-03-23 11:00:52', '2022-03-23 11:12:30'],
            [38, 1, 3, 7, 3, 273, 15000, 4, NULL, NULL, 0, 0, 100, 400, 60000, 60400, 13, 1, NULL, '2022-03-23 11:00:53', '2022-03-23 11:17:01'],
            [39, 3, 3, 7, 5, 30, 4500, 1, NULL, NULL, 0, 0, 100, 100, 4500, 4600, 13, 1, NULL, '2022-03-23 11:00:53', '2022-03-23 11:16:40'],
            [40, 1, 3, 7, 3, 25, 161500, 1, NULL, NULL, 0, 0, 59, 59, 161500, 161559, 13, 1, NULL, '2022-03-23 11:00:53', '2022-03-23 11:17:15'],
            [41, 1, 3, 7, 6, 24, 19500, 1, NULL, NULL, 0, 0, 100, 100, 19500, 19600, 13, 1, NULL, '2022-03-23 11:00:53', '2022-03-23 11:16:00'],
            [42, 1, 3, 7, 1, 19, 1000, 8, NULL, NULL, 0, 0, 50, 400, 8000, 8400, 13, 1, NULL, '2022-03-23 11:00:53', '2022-03-23 11:17:30']
        ];

        foreach ($data as $d){
            DB::table('order_details')->insert([
                'id' => $d[0],
                'seller_id' => $d[1],
                'user_id' => $d[2],
                'order_id' => $d[3],
                'order_stat' => $d[4],
                'product_id' => $d[5],
                'sale_price' => $d[6],
                'qty' => $d[7],
                'color' => $d[8],
                'size' => $d[9],
                'discount' => $d[10],
                'tax' => $d[11],
                'shipping_cost' => $d[12],
                'total_shipping_cost' => $d[13],
                'total_price' => $d[14],
                'grand_total' => $d[15],
                'currency_id' => $d[16],
                'exchange_rate' => $d[17],
                'estimated_shipping_days' => $d[18],
                'created_at' => $d[19],
                'updated_at' => $d[20],
            ]);
        }

    }
}
