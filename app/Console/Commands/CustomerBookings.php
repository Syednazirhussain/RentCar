<?php

namespace App\Console\Commands;

use App\Mail\TodayBooking;
use App\Models\Admin\Booking;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CustomerBookings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:bookings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check number of bookings today';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $booking_count = Booking::whereRaw('Date(created_at) = CURDATE()')->get()->count();
        echo "Total number of bookings ".$booking_count.PHP_EOL;
        Mail::to(config('rentcar.FROM_MAIL_ADDRESS'))->send(new TodayBooking(['count'   => $booking_count]));
    }
}
