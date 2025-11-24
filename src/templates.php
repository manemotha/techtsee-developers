<?php
declare(strict_types=1);

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;
use Slim\App;

return function(App $app) {

    $app->get('/', function(Request $request, Response $response){

        $SERVICES_WE_DELIVER = [
            [
                'title'=>'System Architecture & Full-Stack Engineering',
                'description'=>'Designing end-to-end systems with clean data flow, minimal overhead, and predictable behavior. Frontend → Logic →Backend engineered as one coherent pipeline.',
                'icon'=>'code-window.png'
            ],
            [
                'title'=>'API Design & Integration',
                'description'=>'Building REST and real-time interfaces that are stable, welldocumented, and secure. Clean contracts. Reliable responses. Zero ambiguity.',
                'icon'=>'api-cloud.png'
            ],
            [
                'title'=>'Backend Development & Automation',
                'description'=>'Server logic, databases, background workers, schedulers, and internal tooling. We turn complex operations into deterministic processes.',
                'icon'=>'cloud-gear-automation.png'
            ],
            [
                'title'=>'Database Engineering & Data Management',
                'description'=>'Schema design, indexing, migrations, optimization, and secure storage strategies. Data handled with scientific discipline — nothing sloppy.',
                'icon'=>'database.png'
            ],
            [
                'title'=>'Security & Hardening',
                'description'=>'Authentication, access control, threat modeling, and risk mitigation. We lock down systems so they behave exactly as intended.',
                'icon'=>'shield-check.png'
            ],
            [
                'title'=>'Custom Tooling & Internal Systems',
                'description'=>'CLI utilities, dashboards, agents, and workflow tools built for precision, speed, and autonomy. If it doesn’t exist, we build it.',
                'icon'=>'customize.png'
            ],
        ];

        $SERVICE_PACKAGES = [
            [
                'title'=>'Website Package',
                'services'=>[
                    'Responsive Frontend Development',
                    'Core Backend Logic For Dynamic Content',
                    'Contact Forms, Email Handlers',
                    'Deployment To Your Hosting Environment',
                    'Https Configuration And Security Hardening',
                    'Admin Or Content-management Interface'
                ]
            ],
            [
                'title'=>'Mobile App Package',
                'services'=>[
                    'Cross-platform Development (Android + IOS)',
                    'Responsive, Modern UI Components',
                    'Application State Management',
                    'API Integration And Backend Connectivity',
                    'Local Storage, Caching, And Offline Funcs',
                    'Push Notifications',
                    'Deployment To Google Play And App Store'
                ]
            ],
            [
                'title'=>'Desktop App Package',
                'services'=>[
                    "Cross-platform (Windows, MacOS, Linux)",
                    "Modern UI with Responsive Layouts",
                    "Structured State Management",
                    "Local Database, File-based Storage System",
                    "Secure API Integration for Online Features",
                    "Background Services, Schedulers",
                    "User Authentication and Role-based Access"
                ]
            ],
            [
                'title'=>'Core Build Package',
                'services'=>[
                    "API Or Backend Setup",
                    "Database Design",
                    "Authentication",
                    "Lightweight Admin Or Dashboard",
                    "Deployment To A Single Server",
                    "Basic Monitoring & Logs"
                ]
            ],
            [
                'title'=>'Systems & Automation Package',
                'services'=>[
                    "Full Backend Architecture",
                    "Database Modeling & Optimization",
                    "Microservices, Schedulers, Task Queues",
                    "Internal Tools",
                    "API Integrations With Third-party Services",
                    "CI/CD Pipeline Setup",
                    "Zero-trust Access Policies"
                ]
            ],
            [
                'title'=>'Full Stack Platform Package',
                'services'=>[
                    "UI/UX Interface + Frontend Engineering",
                    "Complete Backend Services And APIs",
                    "Real-time Features",
                    "Multi-environment Deployment",
                    "Containerized Infrastructure",
                    "Structured Documentation For Developers",
                    "User Management, Permissions, And Roles"
                ]
            ],
        ];

        // TWIG VIEW
        $view = Twig::fromRequest($request);

        return $view->render($response, 'index.twig', [
            'URL_BASENAME'=> $_ENV['URL_BASENAME'],
            'SERVICES_WE_DELIVER'=>$SERVICES_WE_DELIVER,
            'SERVICE_PACKAGES'=>$SERVICE_PACKAGES,
            'request'=>$request
        ]);
    });

};
