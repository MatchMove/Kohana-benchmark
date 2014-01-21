Kohana Simple Benchmark
=======================

A simplified profiling utility that uses Kohana's built-in profiler.


Minimum Requirements:
---------------------
- Kohana 3.3
- PHP 5.4

How to Use:
-----------

- As Singleton


    class Controller_Bench extends Controller {
    
        public function action_index()
        {
            $translation_file = 'translation.json';
            
            // WILL NOT work with protected and private scope
            Benchmark::assess(array($this, 'myfunction1'));
            Benchmark::assess('Some_Class::function1');
            Benchmark::assess(array($this, 'function2'), $some, $params);
        }
    }

- As a trait


    class Model_Some extends Controller {
        use Benchmark_Trait_Benchmark;
        
        public function some_method()
        {
            $translation_file = 'translation.json';
            
            // WILL work with protected and private scope
            self::bench_assess(array($this, 'myfunction1'));
            self::bench_assess('Some_Class::function1');
            self::bench_assess(array($this, 'function2'), $some, $params);
        }
    }