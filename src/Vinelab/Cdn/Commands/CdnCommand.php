<?php namespace Vinelab\Cdn\Commands;

/**
 * @author Mahmoud Zalt <inbox@mahmoudzalt.com>
 */

use Illuminate\Console\Command;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Vinelab\Cdn\Contracts\CdnInterface;

class CdnCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cdn:push';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload assets to CDN';

    protected $cdn;

    public function __construct(CdnInterface $cdn)
    {
        $this->cdn = $cdn;

        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        dd($this->cdn->make());
    }

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
//			array('cdn', InputArgument::OPTIONAL, 'cdn option.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
//			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}


}