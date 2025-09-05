<?PHP 
	$pageName="Mobility Model FAQ";
	$pageTitle ="Mobility Model FAQ";
	include('netwis_header.php');
?>
<p class="style1">1. What’s the major difference
between your model and the existing mobility models?</p>
<p>In short, there are three major differences: First,
our SMS model abides by the physical law of a smooth motion, so that it
describes more realistic moving behaviors. Second, by adjusting model
parameters, the SMS model can be much more flexibly and easily
controlled to support various network scenarios. Third, the SMS model
has the desired steady state properties which are essential for both
simulation and analytical study of MANETs. </p>
<p class="style1">2. What are applications for SMS Model?</p>
<p>SMS model considers the smooth movements of
independent single user moving behaviors. The SMS model can be applied
for both simulation and analytical studies. In terms or analytical
study, the SMS model can properly characterize the relative movement
between a pair of ad hoc nodes. Hence, it provides fundamental support
for link performance, topology dynamics and network connectivity in
MANETs. For simulation study, the SMS model can be utilized for routing
performance evaluation, MANET design and optimization in different
network scenarios.</p>
<p class="style1">3. Why uniform node distribution is suggested to use?
</p>
<p>This is because for simulation and analytical
studies of MANETs, mobile nodes are usually assumed to be uniformly
distributed in a network. Therefore, the mobility model has uniform
node distribution will not affect the analysis and simulation of system
parameters, such as link change rate and network throughput of MANET
which has initial uniform node distribution. In contrast, mobility
model, such as random waypoint model, which generates non-uniform node
distribution will cause biased simulation results for network with
uniform node density.</p>
<p class="style1">4. How do you model the SMS model to specific network
environments? </p>
<p>Actually, the parameters configuration of SMS model
depends on the particular types of moving pattern of mobile nodes in a
specific network environment. The SMS model distinguishes itself from
existing macroscopic mobility models in that it can capture the
correlation of user mobility in a very small time scale, i.e., Delta t,
which is in the order of seconds. As for simulation studies, Delta t
can be configured according to specific requirements of time scale
granularity, and target speeds of different types of mobile nodes. For
example, the target speed of pedestrians may be around 2 m/sec, and 15
m/sec for a local school bus. In the configuration of phase duration
time, the basic idea is that the higher the average speed of a node,
the longer the phase duration for speed acceleration/deceleration. For
instance, in real world, it normally takes at least 6 seconds for a car
to accelerate its speed from 0 m/s to 20 m/s, but it just needs less
than 1 second for a pedestrian to reach a walking speed of 1 m/sec.
Therefore, in most of the simulation scenarios using SMS model, the
beta--phase will predominate the movement duration, such that the range
of beta phase duration (beta* Delta t) directly characterizes the
duration of an SMS movement. Meanwhile, an SMS movement can also have
very short beta-phase duration, but much longer alpha and gamma-phase
duration. For example, a car travels intermittently along a road at the
peak hour. </p>
<p class="style1">5. Why not use the real mobility traces obtained from
campus-wide wireless network for SMS model. And what is the major
difference between SMS model and the mobility models used for WLAN?</p>
<p>Actually, the applications of these mobility models
and the SMS model are different. Specifically, the mobility model
proposed from WLAN campus (Dartmouth, UNC, USC) traces are developed
for evaluating the network resource usage, (for example, the session
duration of each mobile user and the frequency that a user visits at
various locations in a WLAN), the prediction of user locations and the
WLAN design. These models describe more realistic mobility patterns;
however, they are mathematically intractable and thus provide limited
understanding for analytical studies. In contrast, the objective of the
SMS model is to describe the individual user mobility according to the
physical law of a smooth motion, which is not restricted by a specific
network, such as WLAN. Moreover, the SMS model is suitable for both
simulation and analytical study of MANETs. </p>
<p class="style1">6. Did you consider that SMS model could have sharp
turn event between two successive movements? </p>
<p>Actually, the sharp turn events happened in the existing random
models, when mobile nodes are <strong>moving</strong>. In our SMS
model, a mobile node can only randomly select a new target direction
for the next movement when it already <strong>stops or pauses</strong>
after the current movement. This is the major difference. In fact, it
is consistent with the reality of node moving behaviors, since after a
pause time, the moving direction between two immediate movements could
have a big difference. For example, a car stops first before it makes a
right turn or U turn in the intersection of streets. </p>
<p class="style1">7. Why you believe that SMS model can appropriate for
the routing performance or analytical study of MANETs? </p>
<p>There are two major reasons: First, our SMS model abides by the
physical law of a smooth motion, so that it describes more realistic
moving behaviors. Second, the SMS model has the desired steady state
properties which can correctly indicate the network performance and
provide appropriate analytical study. </p>
<p class="style1">8. Why you consider the steady state properties of
your SMS model? </p>
<p>Steady state is a state in which equilibrium of a random process has
been achieved, that is the network performance evaluation doesn’t rely
on the factor of simulation time. Hence, only when the random process
of a mobility model reaches the steady state, are the trace file and
the corresponding simulation results reliable to provide correct
performance evaluation. Therefore, the steady state properties of the
SMS model are essential for studying MANETs. </p>
<p class="style1">If you have any question,
please feel free to contact <a href="mailto:mzhao2@ncsu.edu"> Ming Zhao</a>
<br />
<br />
</p>
<?PHP include('netwis_footer.php'); ?>
