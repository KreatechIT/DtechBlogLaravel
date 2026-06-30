<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebsiteController::class, 'indexPage'])->name('website.home');
Route::get('/about', [WebsiteController::class, 'aboutPage'])->name('website.about');
Route::get('/services', [WebsiteController::class, 'servicesPage'])->name('website.services');
Route::get('/projects', [WebsiteController::class, 'projectsPage'])->name('website.projects');
Route::get('/landmark-projects', [WebsiteController::class, 'landmarkProjectsPage'])->name('website.landmarkProjects');
Route::get('/commercial-projects', [WebsiteController::class, 'commercialProjectsPage'])->name('website.commercialProjects');
Route::get('/residential-projects', [WebsiteController::class, 'residentialProjectsPage'])->name('website.residentialProjects');
Route::get('/project/{slug}', [WebsiteController::class, 'singleProjectPage'])->name('website.project.single');

Route::get('/products', [WebsiteController::class, 'productsPage'])->name('website.products');

Route::get('/contact', [WebsiteController::class, 'contactPage'])->name('website.contact');
Route::post('/submit-contact-form', [WebsiteController::class, 'submitContactForm'])->middleware('throttle:5,1')->name('website.contact.submit');

Route::get('/career', [WebsiteController::class, 'careerPage'])->name('website.career');
Route::post('/submit-career-form', [WebsiteController::class, 'submitCareerForm'])->middleware('throttle:5,1')->name('website.career.submit');

Route::get('/our-clients', [WebsiteController::class, 'ourClientsPage'])->name('website.clients');
Route::get('/our-suppliers', [WebsiteController::class, 'ourSuppliersPage'])->name('website.suppliers');

Route::get('/blog', [WebsiteController::class, 'blogPage'])->name('website.blog');
Route::get('/blog/{slug}', [WebsiteController::class, 'blogSinglePage'])->name('website.blog.single');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


