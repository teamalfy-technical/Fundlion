<?php

	namespace App\Notifications;

	use App\FlClientsLoan;
	use App\FlLendersDetails;
	use App\FlLoansStatus;
	use App\User;
	use Illuminate\Bus\Queueable;
	use Illuminate\Notifications\Messages\MailMessage;
	use Illuminate\Notifications\Notification;

	class clientsNotifications extends Notification
	{
		use Queueable;

		protected $param;
		protected $func;

		/**
		 * Create a new notification instance.
		 *
		 * @return void
		 */
		public function __construct($parameter,$function)
		{
			$this->param = $parameter;
			$this->func = $function;
		}

		/**
		 * Get the notification's delivery channels.
		 *
		 * @param mixed $notifiable
		 * @return array
		 */
		public function via($notifiable)
		{
			return ['database'];
		}

		/**
		 * Get the mail representation of the notification.
		 *
		 * @param mixed $notifiable
		 * @return \Illuminate\Notifications\Messages\MailMessage
		 */
		public function toMail($notifiable)
		{
			return (new MailMessage)
				->line('The introduction to the notification.')
				->action('Notification Action', url('/'))
				->line('Thank you for using our application!');
		}

		/**
		 * Get the array representation of the notification.
		 *
		 * @param mixed $notifiable
		 * @return array
		 */
		public function toArray($notifiable)
		{
			$param = $this->param;
			$func = $this->func;
			if ($func !== null && $func === "status") {
				$Loans = FlClientsLoan::where('lender_id',$param)->first();
				$lender = FlLendersDetails::where('lender_id',$param)->first();
				return [ 'data' => 'Your '.$lender->company_name.' loan status has been updated.'];
			}
			if ($func !== null && $func === "manager") {
				$manager = User::findOrFail($param);
				return [ 'data' => 'Your account manager has been changed to'." ".$manager->name,];
			}
			if ($func !== null && $func === "document") { return [ 'data' => 'New document uploaded to your account ('.ucwords($param).')' ]; }
		}
	}
