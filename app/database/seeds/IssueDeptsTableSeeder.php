<?php

class IssueDeptsTableSeeder extends Seeder {

    public function run()
    {
        $issue_dept = [
            [
                'name'      => 'Research and Development'
            ],
            [
                'name'      => 'Freelancing'
            ],
            [
                'name'      => 'Product'
            ]

        ];

        DB::table('issue_dept')->insert($issue_dept);
    }

}