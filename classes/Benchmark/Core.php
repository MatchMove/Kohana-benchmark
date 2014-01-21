<?php defined('SYSPATH') OR die('No direct access allowed.');

class Benchmark_Core {
    use Benchmark_Trait_Benchmark;

    public static function assess()
    {
        return call_user_func_array('self::bench_assess', func_get_args());
    }
}